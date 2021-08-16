<?php

/**
 * @file
 * Responsible for all information displayed on 'Hotel Details' page.
 * @author - Nitin Kumar
 * Created on - 08/07/2021
 */

namespace App\Http\Controllers\PhaseOne;
use Illuminate\Http\Request;
use App\Http\Controllers\ContainerController;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Http\Controllers\Controller;
use App\User;
use DB,Validator, Input, Redirect, CommonHelper, Mail;

class HotelController extends Controller {

  /**
   * Provides all the data of hotel details.
   */
  public function index($title, Request $request) {
    $prop_id = $request->query('id');
    if (empty($prop_id)) {
      return abort(404);
    }
    $imgs = $this->get_property_files($prop_id, 'Property Images');
    if (count($imgs) > 0) {
      foreach ($imgs as $key => $value) {
        $hotel_images[] =  $value->imgsrc . $value->file_name;
      }
    }
    $suites_and_prop_info = $this->suites_by_prop_id($prop_id);
    if (count($suites_and_prop_info) > 0 && count($suites_and_prop_info['propertyDetail']['typedata']) > 0) {
      foreach ($suites_and_prop_info['propertyDetail']['typedata'] as $key => $value) {
        $suites_names[] = $value->category_name;
      }
    }

    $prop_amenities = \DB::table('tb_properties_category_amenities')->where('property_id', $prop_id)->first();
    if (!empty($prop_amenities)) {
        $amenties = $prop_amenities->amenities_eng;
    }

    $data = [
      'hotel_images' => $hotel_images,
      'suites_name' => $suites_names,
      'amenties' => $amenties,
      'property' => $suites_and_prop_info['propertyDetail']['data']
    ];

    // dump($suites_and_prop_info); exit;

    return view('frontend.themes.EC.phaseone.hotel', $data);
  }

  /**
   * Provides hotel images.
   */
  function get_property_files($prop_id, $filetype) {
      $fileArr = \DB::table('tb_properties_images')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_properties_images.file_id')->select('tb_properties_images.*',  \DB::raw("(CASE WHEN (tb_container_files.file_display_name = '') THEN tb_container_files.file_name ELSE tb_container_files.file_display_name END) as file_display_name"), 'tb_container_files.file_name', 'tb_container_files.file_size', 'tb_container_files.file_type', 'tb_container_files.folder_id')->where('tb_properties_images.property_id', $prop_id)->where('tb_properties_images.type', $filetype)->get();
      $filen = array();
      if (!empty($fileArr)) {
          $f = 0;
          foreach ($fileArr as $file) {
              $filen[$f] = $file;
              $filen[$f]->imgsrc = (new ContainerController)->getThumbpath($file->folder_id);
              $f++;
          }
      }
      return $filen;
  }

  /**
   * All suites information.
   */
  function suites_by_prop_id($prop_id){
    $propertiesArr = array();
    $props = \DB::table('tb_properties')->select('tb_properties.*')->where("id", $prop_id)->first();
    if(!empty($props)){
        $propertiesArr['data'] = $props;
        /* Price on Rquest */
        $prcOnReq = false;
        $chkseasonset = \DB::table('tb_seasons')->where('property_id', $props->id)->orderBy('season_priority', 'asc')->get();
        if ($props->default_seasons == 1 || empty($chkseasonset)){
            $prcOnReq = true;
        }
        $propertiesArr['data']->prcOnReq = $prcOnReq;
        /* End */
        /** Currency */
        $this->data['currency'] = \DB::table('tb_settings')->select('content')->where('key_value', 'default_currency')->first();
        /** End */

        /** Property types */
        $cat_types = \DB::table('tb_properties_category_types')->select('id','category_name','room_desc')->where('property_id', $props->id)->where('status', 0)->where('show_on_booking', 1)->get();
        if (!empty($cat_types)) {
            $c = 0;
            foreach ($cat_types as $type) {
                $roomfileArr = \DB::table('tb_properties_images')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_properties_images.file_id')->select('tb_container_files.file_name', 'tb_container_files.file_size', 'tb_container_files.file_type', 'tb_container_files.folder_id')->where('tb_properties_images.property_id', $props->id)->where('tb_properties_images.category_id', $type->id)->where('tb_properties_images.type', 'Rooms Images')->orderBy('tb_container_files.file_sort_num', 'asc')->get();
      $type_cale = '';
                $filen = array();
                if (!empty($roomfileArr)) {
        $propertiesArr['roomimgs'][$type->id]['imgs'] = $roomfileArr;
        $propertiesArr['roomimgs'][$type->id]['imgsrc'] = (new ContainerController)->getThumbpath($roomfileArr[0]->folder_id);
        $propertiesArr['roomimgs'][$type->id]['imgsrc_dir'] = public_path(str_replace(url().'/', '', (new ContainerController)->getThumbpath($roomfileArr[0]->folder_id)));
                    $propertiesArr['typedata'][$c] = $type;
                    $propertiesArr['typedata'][$c]->price = '';
                    $curnDate = date('Y-m-d');
                    if ($props->default_seasons != 1) {
          $checkseason = \DB::table('tb_properties_category_rooms_price')->join('tb_seasons','tb_seasons.id','=','tb_properties_category_rooms_price.season_id')->join('tb_seasons_dates','tb_seasons_dates.season_id','=','tb_seasons.id')->select('tb_properties_category_rooms_price.rack_rate', 'tb_seasons.season_name')->where('tb_properties_category_rooms_price.property_id', $props->id)->where('tb_properties_category_rooms_price.category_id', $type->id)->where('tb_seasons.property_id', $props->id)->where('tb_seasons_dates.season_from_date', '<=', $curnDate)->where('tb_seasons_dates.season_to_date', '>=', $curnDate)->orderBy('tb_seasons.season_priority', 'asc')->first();
          //print_r($checkseason); die;
                    } else {
                        $checkseason = \DB::table('tb_properties_category_rooms_price')->join('tb_seasons','tb_seasons.id','=','tb_properties_category_rooms_price.season_id')->join('tb_seasons_dates','tb_seasons_dates.season_id','=','tb_seasons.id')->select('tb_properties_category_rooms_price.rack_rate', 'tb_seasons.season_name')->where('tb_properties_category_rooms_price.property_id', $props->id)->where('tb_properties_category_rooms_price.category_id', $type->id)->where('tb_seasons.property_id', 0)->where('tb_seasons_dates.season_from_date', '<=', $curnDate)->where('tb_seasons_dates.season_to_date', '>=', $curnDate)->first();
                    }

        if (!empty($checkseason)) {
            $propertiesArr['typedata'][$c]->price = $checkseason->rack_rate;
                          $propertiesArr['typedata'][$c]->season = $checkseason->season_name;
                    } else {
                        $checkseasonPrice_ifnotanyseason = \DB::table('tb_properties_category_rooms_price')->select('rack_rate')->where('season_id', 0)->where('property_id', $props->id)->where('category_id', $type->id)->first();
                        if (!empty($checkseasonPrice_ifnotanyseason)) {
                            $propertiesArr['typedata'][$c]->price = $checkseasonPrice_ifnotanyseason->rack_rate;
                            $propertiesArr['typedata'][$c]->season = '';
                        }
                    }

                    $cat_rooms_price = \DB::table('tb_properties_category_rooms_price')->leftJoin('tb_properties_category_types','tb_properties_category_types.id','=','tb_properties_category_rooms_price.category_id')->leftJoin('tb_seasons','tb_seasons.id','=','tb_properties_category_rooms_price.season_id')->select('tb_seasons.season_name','tb_properties_category_rooms_price.rack_rate','tb_properties_category_types.category_name')->where('tb_properties_category_rooms_price.category_id', $type->id)->get();

                    $propertiesArr['typedata'][$c]->seasonwiseprice = $cat_rooms_price;

        $c++;
                }

            }
            usort($propertiesArr['typedata'], function($a, $b) {
                return trim($a->price) < trim($b->price);
            });
        }
        /** End */

    }
    $this->data['propertyDetail'] = $propertiesArr;
    return $this->data;
  }

}
