<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;
use Illuminate\Http\Request;

use App\Models\PropertyRoomPrices;
use App\Models\PropertyImages;
use App\Models\PropertyRooms;
use App\Models\availableservices;
use App\Models\ImageResSpaBar;
use App\Models\SeasonDates;
use App\Models\Categories;
use App\Models\properties;
use App\Models\amenities;
use App\Models\Seasons;
use App\Models\Container;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Spa;

use DateTime;
use DB;
use Cache;
trait Property {
    
    public function getLocationDescription($keyword){
        $location = Categories::select(['id', 
            'parent_category_id', 
            'category_name', 
            'category_description',
            'category_alias',
            'category_image'
        ])
        ->where('category_name', '=', $keyword)
        ->get()
        ->toArray();

        return $location;
    }

    public function getLocationPath($keyword){
        $path = [];
        
        $category = Categories::select(['id', 'parent_category_id', 'category_name'])
        ->where('category_name', 'like', "%$keyword%")
        ->get()
        ->toArray();

        if(!empty($category)){
            $path[$category[0]['id']] = $category[0]['category_name'];

            while($category[0]['parent_category_id']!=0){
                $category = $this->getParentCategory($category[0]['parent_category_id']);
                $catId = $category[0]['id'];
                $parentId = $category[0]['parent_category_id'];
                
                $path[$catId] = $category[0]['category_name'];
            }
        } else {
            return [];
        }

        $path = array_reverse($path);
        return $path;

    }

    private function getParentCategory($parent_id){
        $parent = Categories::select(['id', 'parent_category_id', 'category_name'])
        ->where('id', '=', $parent_id)
        ->get()
        ->toArray();

        return $parent;
    }

    public function getEditorChoiceProperties($cities, $keyword){
        return properties::orderByRaw("RAND()")->select([
            'id', 
            'property_name', 
            'property_short_name', 
            'detail_section1_title', 
            'detail_section1_description_box1', 
            'detail_section1_description_box2', 
            'detail_section1_description_box2', 
            'roomamenities', 
            'assign_amenities', 
            'latitude',
            'longitude',
            'address', 
            'internetpublic',
            'internetroom',
            'children_policy',
            'checkin',
            'checkout',
            'transfer',
            'smookingpolicy',
            'smookingrooms',
            'numberofrooms',
            'availableservices',
            'pets',
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids',
            'city'
            ])
        ->with([
            'boards',
            'container',
            'suites' => function($query){
                return $query->with(['rooms', 'amenities']);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->whereRaw(" (city = '$keyword' or country = '$keyword') ")
        //->where('country', '=', $keyword)
        ->where('editor_choice_property', '=', 1)
        ->where('property_status', '=', 1)
        ->limit(2)
        ->get();

    }

    public function getFeaturedProperties($cities, $keyword){
        return properties::orderByRaw("RAND()")->select([
            'id', 
            'property_name', 
            'property_short_name', 
            'detail_section1_title', 
            'detail_section1_description_box1', 
            'detail_section1_description_box2', 
            'detail_section1_description_box2', 
            'roomamenities', 
            'assign_amenities', 
            'latitude',
            'longitude',
            'address', 
            'internetpublic',
            'internetroom',
            'children_policy',
            'checkin',
            'checkout',
            'transfer',
            'smookingpolicy',
            'smookingrooms',
            'numberofrooms',
            'availableservices',
            'pets',
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids',
            'city'
        ])
        ->with([
            'boards',
            'container',
            //'images',
            'suites' => function($query){
                return $query->with(['rooms', 'amenities']);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->whereRaw(" (city = '$keyword' or country = '$keyword') ")
        //->where('country', '=', $keyword)
        ->where('feature_property', '=', 1)
        ->where('property_status', '=', 1)
        ->limit(2)
        ->get();
    }

    public function searchPropertiesByKeyword($cities, $keyword){
        $key = md5($keyword.request()->get('experience').
        request()->get('facility_ids').
        request()->get('atmosphere_ids').
        request()->get('style_ids'));

        return Cache::get($key, function () {
            $keyword = request()->get('s');
            //Query starts
            $experience_id = false;
            if(request()->get('experience')){
                $experience = categories::select(['id'])
                ->where('category_alias', '=', request()->get('experience'))
                ->get()
                ->toArray();

                $experience_id = $experience[0]['id'];
            }

            $properties = properties::select([
                'id', 
                'property_name', 
                'property_short_name', 
                'detail_section1_title', 
                'detail_section1_description_box1', 
                'detail_section1_description_box2', 
                'detail_section1_description_box2', 
                'roomamenities', 
                'assign_amenities', 
                'latitude',
                'longitude',
                'address', 
                'internetpublic',
                'internetroom',
                'children_policy',
                'checkin',
                'checkout',
                'transfer',
                'smookingpolicy',
                'smookingrooms',
                'numberofrooms',
                'availableservices',
                'pets',
                'carpark',
                'bar_ids',
                'spa_ids',
                'restaurant_ids',
                'city'
            ])
            ->with([
                'boards',
                'container',
                //'images',
                'PropertyCategoryPackages' => function($query){
                    $query->with(['package']);
                },
                'suites' => function($query){
                    return $query->with(['rooms', 'amenities']);
                },
                'propertyImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }, 
                'roomImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }, 
                'hotelBrochureImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }
            ])
            //->whereIn('city', $cities)
            ->whereRaw(" (city = '$keyword' or country = '$keyword') ")
            //->where('country', '=', $keyword)
            ->where('latitude', '!=', '')
            ->where('longitude', '!=', '')
            ->where('feature_property', '!=', '1')
            ->where('editor_choice_property', '!=', '1')
            ->where('longitude', '!=', '')
            ->where('property_status', '=', 1);

            if(request()->get('atmosphere_ids')){            
                $atmosphere_ids = explode(",",request()->get('atmosphere_ids'));
                $aWhere = [];
                foreach($atmosphere_ids as $id){
                    $aWhere[] = "atmosphere_ids = '$id' or atmosphere_ids like '%,$id%' or atmosphere_ids like '%$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if(request()->get('facility_ids')){
                $facility_ids = explode(",",request()->get('facility_ids'));
                $aWhere = [];
                foreach($facility_ids as $id){
                    $aWhere[] = "facility_ids = '$id' or facility_ids like '%,$id%' or facility_ids like '%$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if(request()->get('style_ids')){
                $style_ids = explode(",",request()->get('style_ids'));
                $aWhere = [];
                foreach($style_ids as $id){
                    $aWhere[] = "style_ids = '$id' or style_ids like '%,$id%' or style_ids like '%$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if($experience_id){
                $properties->whereRaw("(experience_ids = '$experience_id' or experience_ids like '%,$experience_id%' or experience_ids like '%$experience_id,%')");
            }   

            return $properties
            //->limit(6)
            ->get();
        });            
    }

    private function filterByprice($max,$min,&$propertyResults){
        foreach ($propertyResults as $k => $property) {
            if($property->price >= $min && $property->price <= $max ){
                
            }else{  
                unset($propertyResults[$k]);
            }
        }
        // echo "<pre>";print_r($propertyResults);exit;
    }


    public function formatPropertyRecords(&$properties){
        $roomamenitieslist = [];
        $all = [];
        foreach($properties as $k => $property){
            $suiteNameList = [];
            $properties[$k]->price = $this->getPropertyPrice($property->id);
            $properties[$k]->roomamenities = $this->formatRoomAmenities($property->roomamenities);
            $properties[$k]->assign_amenities = $this->formatRoomAmenities($property->assign_amenities);
            $properties[$k]->availableservices = $this->formatAvailableServices($property->availableservices);

            // room images
            if(!empty($property->suites)){
                $suiteNameList = [];
                foreach($property->suites as $sk => $suite){
                    $property->suites[$sk]->price = $this->getSuitePrice($suite->id);
                    $suiteNameList[] = $suite->cat_short_name;
                    if(!empty($suite->rooms->toArray())){
                        foreach($suite->rooms as $rk => $room){
                            //$properties[$k]->suites[$sk]->rooms[$rk]->price = $this->getRoomPrice($room->id);

                            if(!isset($properties[$k]->suites[$sk]->rooms[$rk]->images)){
                                $properties[$k]->suites[$sk]->rooms[$rk]->images = $this->getRoomImages($room->property_id, $room->category_id);
                            }
                        }
                        foreach($suite->amenities as $ak => $amenity){
                            $suiteamenities = amenities::whereIn('id', explode(',', $amenity->amenity_ids))
                            ->get()->toArray();
                            $properties[$k]->suites[$sk]->suiteamenities = $this->formatRoomAmenities($amenity->amenity_ids, 'li');
                        }
                    }else{
                        $properties[$k]->suites[$sk]->rooms[0] = [
                            'id' => 0,
                            'images' => [
                                'id' => 0,
                                'file_name' => 'default-image.png',
                                'name' => 'room-1',
                            ]
                        ];
                    }
                }
            }
            $properties[$k]->suiteNameList = implode('<br>', $suiteNameList);

            //bars spas and restrurants
            $bars = Bar::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->bar_ids)))
            ->get();

            $pbars = [];
            foreach($bars as $bar){
                $pbars[$bar->id]['title'] = $bar->title;
                $pbars[$bar->id]['gallery'] = $this->getResSpaBarGallery($bar->id, 'bar');
            }
            $properties[$k]->barList = $pbars;

            $spas = Spa::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->spa_ids)))
            ->get();

            $pspas = [];
            foreach($spas as $spa){
                $pspas[$spa->id]['title'] = $spa->title;
                $pspas[$spa->id]['gallery'] = $this->getResSpaBarGallery($spa->id, 'spa');
            }
            $properties[$k]->spaList = $pspas;

            $restaurants = Restaurant::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->restaurant_ids)))
            ->get();

            $prestau = [];
            foreach($restaurants as $res){
                $prestau[$res->id]['title'] = $res->title;
                $prestau[$res->id]['gallery'] = $this->getResSpaBarGallery($res->id, 'res');
            }
            $properties[$k]->restaurantList = $prestau;

        }
    }

    private function getResSpaBarGallery($id, $type){
        $gallery = [];
        $containerId = ImageResSpaBar::select(['folder_id'])
            ->where('parent_id', '=', $id)
            ->where('type', '=', $type)
            ->get()
            ->toArray();

        if(!empty($containerId)){
            $containerId = $containerId[0]['folder_id'];
            $containerName = Container::select(['name'])
                ->where('id', '=', $containerId)
                ->get()
                ->toArray();
            $containerName = $containerName[0]['name'];

            $galleryId = Container::where('parent_id', '=', $containerId)
                ->where('name', '=', 'gallery')
                ->get()
                ->toArray();
            if(!empty($galleryId)){
                $gallery = Container::select(['id', 'name'])
                    ->where('id', '=', $galleryId[0]['id'])
                    ->with(['files'])
                    ->get()
                    ->toArray();
                if(!empty($gallery)){
                    $gallery = $gallery[0];
                    $gallery['container'] = $containerName;
                }
            }
        }

        return $gallery;
    }

    public function formatRecordsMap($results) {
        $mapResults = [];
        foreach($results as $property){
            $row = [];
            $row['type'] = 'Property';
            $row['geometry'] = [
                'type' => 'Point',
                'coordinates' => [$property->longitude, $property->latitude]
            ];

            $images = [];
            foreach($property->propertyImages as $image){
                  if(isset($property['container']['name'])){
                    $container_name = $property['container']['name'];
                  }else{
                    $container_name = strtolower(str_replace("-", " ", trim($property->property_name)));
                  }

                  if(is_array($image)){
                    $file_name = $image['file_name'];
                  }elseif(is_object($image)){
                    $file_name = $image->file_name;
                  }else{
                    $file_name = 'default-image.png';
                  }

                $images[] = 'uploads/container_user_files/locations/'.$container_name.'/property-images/'.$file_name;
            }

            $row['properties'] = [
                'dataId' => 'hotel_' . $property->id,
                'title' => $property->property_name,
                'description' => $property->detail_section1_description_box1,
                'price' => '€269',
                'images'=> $images,
            ];
            $mapResults[] = $row;
        }

        return json_encode($mapResults);
    }

    public function seperatedByPackage($results){
        $lifestyle = [];
        $dedicated = [];
        $bespoke = [];
        foreach($results as $property){
            $record = $property->toArray();
            if(!isset($record['property_category_packages']['package_id'])) continue;
            if($record['property_category_packages']['package_id'] == '38'){
                $lifestyle[] = $property;
            }elseif($record['property_category_packages']['package_id'] == '39'){
                $dedicated[] = $property;
            }elseif($record['property_category_packages']['package_id'] == '40'){
                $bespoke[] = $property;
            }
        }

        return [
            'lifestyle' => $lifestyle,
            'dedicated' => $dedicated,
            'bespoke' => $bespoke,
        ];
    }

    public function getPropertyRoomPrices($id, $category_id, $arrival, $departure){
        $seasonDays = [];

        $roomIds = [];
        $rooms = PropertyRooms::where('category_id', '=', $category_id)
        ->get()
        ->toArray();
        foreach($rooms as $room){
            $roomIds[] = $room['id'];
        }

        $journyStart = $arrival;
        $journyEnd = $departure;

        while($journyStart <= $journyEnd){
            // Get season dates
            $seasonDates = SeasonDates::select(['season_id', 'season_from_date', 'season_to_date'])
            ->where('season_from_date', '<=', $journyStart)
            ->where('season_to_date', '>=', $journyStart)
            ->where('property_id', '=', $id)
            ->get()
            ->toArray();

            // Find prices per day mon, tue, wed...
            if(!empty($seasonDates)){
                foreach($seasonDates as $sdate){                    
                    // Get season prices
                    $roomPrices = PropertyRoomPrices::select([
                        'monday_price', 
                        'tuesday_price',
                        'wednesday_price',
                        'thursday_price',
                        'friday_price',
                        'saturday_price',
                        'sunday_price',
                    ])
                    ->whereIn('category_id', $roomIds)
                    ->where('season_id', '=', $sdate['season_id'])
                    ->get()
                    ->toArray();
                    
                    if(empty($roomPrices)){
                        continue;    
                    }

                    $start = $sdate['season_from_date'];
                    $end = $sdate['season_to_date'];

                    while($start <= $end){
                        $dayname = strtolower(date('l', strtotime($start)));

                        $seasonDays[$start] = $roomPrices[0][$dayname.'_price'];

                        $nextDay = new DateTime($start . ' + 1 day');
                        $start = $nextDay->format('Y-m-d');
                    }
                }
            }


            $nextDay = new DateTime($journyStart . ' + 1 day');
            $journyStart = $nextDay->format('Y-m-d');
        }

        return $seasonDays;
    }

    private function getStartAndEndDate($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('Y-m-d');
        $dto->modify('+6 days');
        $ret['week_end'] = $dto->format('Y-m-d');
        return $ret;
    }

    public function getLoaderImages($location){
        $loaderImages = Container::where('parent_id', '=', 10294)
        ->where('display_name', 'like', '%'.$location.'%')
        ->with(['files'])
        ->get()
        ->toArray();

        return $loaderImages;
    }

    public function getPropertyPrice($id){
        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        ->where('property_id', '=', $id)
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }
    }

    public function formatRoomAmenities($commaSeperated, $format = null){        
        // room and assign amenitiess
        $roomamenities = amenities::whereIn('id', explode(',', $commaSeperated))
        ->get()->toArray();
        if(!empty($roomamenities)){
            foreach($roomamenities as $amenity){
                $roomamenitieslist[] = $amenity['amenity_title'];
            }
        }
        if(!empty($roomamenitieslist)){
            if($format == 'li'){
                return '<li>'.implode('</li><li>', $roomamenitieslist).'</li>';
            }
            return implode(',', $roomamenitieslist);
        }else{
            return '';
        }
    }

    public function formatAvailableServices($commaSeperated){
        $all = [];
        $allservices = availableservices::whereIn('id', explode(',', $commaSeperated))
        ->get()->toArray();
        
        if(!empty($allservices)){
            foreach($allservices as $service){
                $all[] = $service['title'];
            }
        }
        if(!empty($all)){
            return implode(',', $all);
        }else{
            return '';
        }
    }

    public function getSuitePrice($suite_id){
        $seasonDays = [];

        $roomIds = [];
        $rooms = PropertyRooms::where('category_id', '=', $suite_id)
        ->get()
        ->toArray();
        foreach($rooms as $room){
            $roomIds[] = $room['id'];
        }

        if(empty($roomIds)) return 0;

        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        ->whereIn('category_id', $roomIds)
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }

    }

    public function getRoomPrice($room_id){
        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        ->where('category_id', '=', $room_id)
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }

    }

    public function getRoomImages($property_id, $room_id){
        $roomImages = PropertyImages::with(['file' => function($query){
            return $query
            ->leftJoin('tb_container', 'tb_container_files.folder_id', 
                '=', 'tb_container.id')
            ->select(['tb_container_files.id', 'file_name', 'tb_container.name']);
        }])
        ->where('property_id', '=', $property_id)
        ->where('category_id', '=', $room_id)
        ->get()
        ->toArray();

        return $roomImages;
    }

    public function getCities($keyword, &$cities){
        $locations = Categories::select(['id', 'category_name'])
        ->where('category_name', 'like', "%$keyword%")
        ->get()
        ->toArray();

        if(empty($locations)){
            $cities[] = $keyword;
        }else{
            foreach($locations as $location){
                $childs = Categories::where('parent_category_id', '=', $location['id'])
                ->get()
                ->toArray();
                foreach($childs as $child){
                    $cities[] = $child['category_name'];
                    $this->getCities($child['category_name'], $cities);
                }
            }
        }
    }

    public function storeSession($adults, $childs,
        $arrive_date,$departure_date){

        $adult = 0;
        $child = 0;
        if(isset($adults[0])){
            $adult = $adults[0];
        }
        if(isset($childs[0])){
            $child = $childs[0];
        }

        $Guests = $adult + $child; 
        \session()->put('adult',$adult);
        \session()->put('suites',4);          
        \session()->put('children',$child);
        \session()->put('Guests',$Guests);
        \session()->put('arrival_date',$arrive_date);
        \session()->put('departure_date',$departure_date);        
    }
     public function setFitlerOptions(){
        $this->data['experiences_data'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', 8)
        ->get();

        $this->data['atmosphere'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', 886)
        ->get();

        $this->data['facilities'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', 897)
        ->get();

        $this->data['style'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', 909)
        ->get();

        return $this->data;
    }

    public function getFilterParameter(){

        if(request()->get('atmosphere_ids')){
            $atmospheres_ids = explode(",",request()->get('atmosphere_ids'));
            $atmosphere_ = [];
            foreach($atmospheres_ids as $atm_ids){
                $atmosphere_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id', $atm_ids)
                    ->get();        
            }
            $this->data['atmosphere_data'] = $atmosphere_;
            // echo "<pre>";print_r($this->data['atmosphere_data']);exit;
        }

        if(request()->get('facility_ids')){
            $facility_ids = explode(",",request()->get('facility_ids'));
            $facility_ = [];
            foreach($facility_ids as $fac_id){
                $facility_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id', $fac_id)
                    ->get();        
            }
            $this->data['facility_data'] = $facility_;
        }

        if(request()->get('style_ids')){
            $style_ids = explode(",",request()->get('style_ids'));
            $style_ = [];
            foreach($style_ids as $sty_id){
                $style_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id',$sty_id)
                    ->get();        
            }

            $this->data['selected_style'] = $style_;
        }
        return $this->data;
    }

    public function getProperty($id){
        $properties = properties::select([
            'id', 
            'property_name', 
            'property_short_name', 
            'detail_section1_title', 
            'detail_section1_description_box1', 
            'detail_section1_description_box2', 
            'detail_section1_description_box2', 
            'roomamenities', 
            'assign_amenities', 
            'latitude',
            'longitude',
            'address', 
            'internetpublic',
            'internetroom',
            'children_policy',
            'checkin',
            'checkout',
            'transfer',
            'smookingpolicy',
            'smookingrooms',
            'numberofrooms',
            'availableservices',
            'pets',
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids'
        ])
        ->with([
            'container',
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            },
        ])
        ->where('id', '=', $id)
        ->get();

        $this->formatPropertyRecords($properties);

        return $properties;
    }

}
