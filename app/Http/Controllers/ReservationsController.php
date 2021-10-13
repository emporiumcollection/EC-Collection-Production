<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Models\PropertyCategoryTypes;
use App\Models\Addresses;
use App\Models\properties;
use App\Http\Traits\Property;
use App\User;
use Response;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator,
    Input,
    Redirect;

class ReservationsController extends Controller {

    protected $layout = "layouts.main";
    protected $data = array();
    public $module = 'reservations';
    static $per_page = '10';        

    use Property;

    public function __construct() {

        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->model = new Reservations();
        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);
        $this->data = array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'reservations',
            'return' => self::returnUrl()
        );
    }

    public function index(){

        if (!\Auth::check())
            return redirect('user/login');        
        $atmosphere = \DB::table('tb_categories')->where('parent_category_id', 886)->get();
        $facilities = \DB::table('tb_categories')->where('parent_category_id', 897)->get();
        $style = \DB::table('tb_categories')->where('parent_category_id', 909)->get();        

        $file_name = 'frontend.themes.reservation.pages.reservations';
        return view($file_name,compact('atmosphere','facilities','style'));
    }

    public function when(Request $request)
    {
        if (!\Auth::check())
            return redirect('user/login');
        $properties = PropertyCategoryTypes::first();
        // echo "<pre>";print_r($properties);exit;        
        $request->session()
                ->put('property_id',$properties->property_id);
        $request->session()
                ->put('suite_name',$properties->category_name);               
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.when';
        return view($file_name, $this->data);   
    }

    public function where()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.where';
        return view($file_name, $this->data);   
    }

    public function suite(Request $request)
    {
        if (!\Auth::check())
            return redirect('user/login');

        $this->data['suites'] = properties::with('suites')->where('id',\Session::get('property_id'))->get();
        $this->data['property'] = properties::select(['id'])
        ->where('id',\Session::get('property_id'))->get();
        $this->formatPropertyRecords($this->data['property']);
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.suite';
        return view($file_name, $this->data);   
    }

    public function suiteBoard()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $suite = request()->suite;

        $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',\Session::get('suit_id'))->first();
        
        $this->data['suitesboards'] = properties::with('boards')->where('id',\Session::get('property_id'))->get();
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.suiteboard';
        return view($file_name, $this->data);   
    }

    public function Policies()
    {
        if (!\Auth::check())
            return redirect('user/login');

        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $this->data['policies'] = PropertyCategoryTypes::select('id','property_id','category_name','booking_policy')->where('id',\Session::get('suit_id'))->first();
        $this->data['termDetail'] = \DB::table('tb_properties_custom_plan')->where('property_id',\Session::get('property_id'))->get();
        $this->data['global_terms'] = \DB::table('tb_policies')->get();
        $file_name = 'frontend.themes.EC.reservation.suitepolicies';
        return view($file_name, $this->data);   
    }

    // public function aditionalServices()
    // {
    //     if (!\Auth::check())
    //         return redirect('user/login');
    //     $this->data['layout_type'] = 'old';
    //     $this->data['keyword'] = '';
    //     $this->data['arrive'] = '';
    //     $this->data['departure'] = '';
    //     $this->data['total_guests'] = '';        
    //     $this->data['location'] = '';        
    //     $file_name = 'frontend.themes.EC.reservation.services';
    //     return view($file_name, $this->data);   
    // }

    public function whoistravelling()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['companion'] = \DB::table('tb_companion')->where('user_id', \Session::get('uid'))->get();

        $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',\Session::get('suit_id'))->first();

        $this->data['address'] = User::find(\Session::get('uid'));
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';

        $file_name = 'frontend.themes.EC.reservation.whotravelling';
        return view($file_name, $this->data);   
    }

    public function addresses(Request $request){
        
         if (!\Auth::check())
            return Redirect::to('user/login');
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {                 
            $user = User::find(\Session::get('uid'));
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->mobile_number = $request->input('phone');
            $user->address = $request->input('address1');
            $user->city = $request->input('city');
            // $user->email = $request->input('state');
            $user->country = $request->input('country');
            $user->title = $request->input('title');
            $user->zip_code = $request->input('zip_code');
            $user->save();  
        }
    }

    public function addcompanion(Request $request)
    {
        if (!\Auth::check())
            return Redirect::to('user/login');
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
            if ($validator->passes()) {                 
                $user = User::find(\Session::get('uid'));
                $id = $user->id;            
                $companion_data['user_id'] = $user->id;
                $companion_data['first_name'] = $request->input('first_name');
                $companion_data['last_name'] = $request->input('last_name');           
                $companion_data['email'] = $request->input('email');
                $companion_data['phone_number'] = $request->input('phone');
                $companionId = \DB::table('tb_companion')->insert($companion_data);
            }
    }

    public function paymentmethod()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.payment_method';
        return view($file_name, $this->data);   
    }

    public function hotelpolicies()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';        

        $file_name = 'frontend.themes.EC.reservation.hotel_policies';
        return view($file_name, $this->data);   
    }

    public function bookingsummary()
    {
        if (!\Auth::check())
            return redirect('user/login');
        $this->data['layout_type'] = 'old';
        $this->data['keyword'] = '';
        $this->data['arrive'] = '';
        $this->data['departure'] = '';
        $this->data['total_guests'] = '';        
        $this->data['location'] = '';

        $arrival = \Session::get('arrival_date');
        // $this->data['arival_date'] = date('Y-m-d',$arrival);   
        
        // echo "<pre>";print_r($this->data['arival_date']);exit;

        $this->data['policies'] = PropertyCategoryTypes::where('id',\Session::get('suit_id'))->first();

        $this->data['suites'] = PropertyCategoryTypes::select('id','property_id','category_name','room_desc')->where('id',\Session::get('suit_id'))->first();
                
        $file_name = 'frontend.themes.EC.reservation.booking_summary';
        return view($file_name, $this->data);   
    }

    public function selected_suite(Request $request)
    {  
        $suits_id = $request->suit_id;
        \Session::put('suit_id', $suits_id);
        $request->session()->put('suit_id', $suits_id);
        $data = 'data';
        echo json_encode($data);
        die;
    }

    public function storecompanionTosession(Request $request)
    {
        $request->session()->put('companion_id', $request->companion_id);
        $request->session()->put('companion_name', $request->companion_name);
        $request->session()->put('companion_email', $request->companion_email);
        $request->session()->put('companion_phone', $request->companion_phone);
    }

    public function getIndex(Request $request) 
    {    
        $uid = \Auth::user()->id;
        if ($this->access['is_view'] == 0)
            return Redirect::to('dashboard')
                            ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');

        $sort = (!is_null($request->input('sort')) ? $request->input('sort') : 'id');
        $order = (!is_null($request->input('order')) ? $request->input('order') : 'asc');
        // End Filter sort and order for query 
        // Filter Search for query		
        $filter = (!is_null($request->input('search')) ? $this->buildSearch() : '');
        if (\Auth::user()->group_id != 1) {
            $filter .= " AND (user_id='" . $uid . "')";
        }

        $page = $request->input('page', 1);
        $params = array(
            'page' => $page,
            'limit' => (!is_null($request->input('rows')) ? filter_var($request->input('rows'), FILTER_VALIDATE_INT) : static::$per_page ),
            'sort' => $sort,
            'order' => $order,
            'params' => $filter,
            'global' => (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
        );
        // Get Query 
        $results = $this->model->getRows($params);
        // Build pagination setting
        $page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;
        $pagination = new Paginator($results['rows'], $results['total'], $params['limit']);
        $pagination->setPath('reservations');
        $this->data['rowData'] = $results['rows'];
        // Build Pagination 
        $this->data['pagination'] = $pagination;
        // Build pager number and append current param GET
        $this->data['pager'] = $this->injectPaginate();
        // Row grid Number 
        $this->data['i'] = ($page * $params['limit']) - $params['limit'];
        // Grid Configuration 
        $this->data['tableGrid'] = $this->info['config']['grid'];
        $this->data['tableForm'] = $this->info['config']['forms'];
        $this->data['colspan'] = \SiteHelpers::viewColSpan($this->info['config']['grid']);
        // Group users permission
        $this->data['access'] = $this->access;
        // Detail from master if any
        // Master detail link if any 
        $this->data['subgrid'] = (isset($this->info['config']['subgrid']) ? $this->info['config']['subgrid'] : array());
        // Render into template
        return "Here";
        return view('reservations.index', $this->data);
    }

    function getUpdate(Request $request, $id = null) {

        if ($id == '') {
            if ($this->access['is_add'] == 0)
                return Redirect::to('dashboard')->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');
        }

        if ($id != '') {
            if ($this->access['is_edit'] == 0)
                return Redirect::to('dashboard')->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');
        }

        $row = $this->model->find($id);
        if ($row) {
            $this->data['row'] = $row;
        } else {
            $this->data['row'] = $this->model->getColumnTable('tb_orders');
        }
        $this->data['fields'] = \SiteHelpers::fieldLang($this->info['config']['forms']);

        $this->data['id'] = $id;
        return view('reservations.form', $this->data);
    }

    public function getShow($id = null) {

        if ($this->access['is_detail'] == 0)
            return Redirect::to('dashboard')
                            ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');

        $row = $this->model->getRow($id);
        if ($row) {
            $this->data['row'] = $row;
        } else {
            $this->data['row'] = $this->model->getColumnTable('tb_orders');
        }
        $this->data['fields'] = \SiteHelpers::fieldLang($this->info['config']['grid']);

        $this->data['id'] = $id;
        $this->data['access'] = $this->access;

        $fetch_orderItems = \DB::table('tb_order_items')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_order_items.file_id')->select('tb_order_items.*', 'tb_container_files.file_name', 'tb_container_files.folder_id', 'tb_container_files.file_display_name')->where('tb_order_items.order_id', $id)->get();
        if (!empty($fetch_orderItems)) {
            $this->data['orderitems'] = $fetch_orderItems;
        }

        return view('reservations.view', $this->data);
    }

    function postSave(Request $request) {

        $rules = $this->validateForm();
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes()) {
            $data = $this->validatePost('tb_reservations');

            $id = $this->model->insertRow($data, $request->input('id'));

            if (!is_null($request->input('apply'))) {
                $return = 'reservations/update/' . $id . '?return=' . self::returnUrl();
            } else {
                $return = 'reservations?return=' . self::returnUrl();
            }

            // Insert logs into database
            if ($request->input('id') == '') {
                \SiteHelpers::auditTrail($request, 'New Data with ID ' . $id . ' Has been Inserted !');
            } else {
                \SiteHelpers::auditTrail($request, 'Data with ID ' . $id . ' Has been Updated !');
            }

            return Redirect::to($return)->with('messagetext', \Lang::get('core.note_success'))->with('msgstatus', 'success');
        } else {

            return Redirect::to('reservations/update/' . $id)->with('messagetext', \Lang::get('core.note_error'))->with('msgstatus', 'error')
                            ->withErrors($validator)->withInput();
        }
    }

    public function postDelete(Request $request) {

        if ($this->access['is_remove'] == 0)
            return Redirect::to('dashboard')
                            ->with('messagetext', \Lang::get('core.note_restric'))->with('msgstatus', 'error');
        // delete multipe rows 
        if (count($request->input('ids')) >= 1) {
            $this->model->destroy($request->input('ids'));
            \DB::table('tb_order_items')->whereIn('order_id', $request->input('ids'))->delete();

            \SiteHelpers::auditTrail($request, "ID : " . implode(",", $request->input('ids')) . "  , Has Been Removed Successfull");
            // redirect
            return Redirect::to('reservations')
                            ->with('messagetext', \Lang::get('core.note_success_delete'))->with('msgstatus', 'success');
        } else {
            return Redirect::to('reservations')
                            ->with('messagetext', 'No Item Deleted')->with('msgstatus', 'error');
        }
    }

    public function lightbox_ordered_item_update(Request $request) {
        $itemId = $request->input('itemId');
        if ($itemId != "" && $itemId > 0) {
            $check_lightcontent = \DB::table('tb_order_items')->where('id', $itemId)->first();
            if ($check_lightcontent > 0) {
                $del_lightbox_imgs = \DB::table('tb_order_items')->where('id', $itemId)->delete();
                $del_container_file = \DB::table('tb_container_files')->where('id', $check_lightcontent->file_id)->delete();

                //email to user
                $check_userd = \DB::table('tb_order_items')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_order_items.file_id')->join('tb_users', 'tb_users.id', '=', 'tb_order_items.user_id')->select('tb_users.email', 'tb_users.first_name', 'tb_users.last_name', 'tb_order_items.*', 'tb_container_files.display_name as fileName')->where('tb_order_items.id', $itemId)->first();
                if (!empty($check_userd)) {
                    $msg = 'Sehr geehrte(r) Frau / Herr ' . $check_userd->first_name . ' ' . $check_userd->last_Name . ', <br> vielen Dank für Ihre Bestellung über unsere Homepage www.janua-moebel.com. Sie haben folgendes Produkt mit der Nummer: .... (Monolith Rohling / Steinplatte / SK 07 Schale) bestellt.
				Here we list the Products. <br> ' . $check_userd->fileName . '<br> Hinweis bei Monolith-Roling: Um die finale Oberfläche Ihres Monolith-Tisches von Stefan Knopp® auszuwählen, wenden Sie sich bitte an Ihren Händler.<br>Ihr JANUA® -Team';

                    $data['msg'] = $msg;
                    $toouser['email'] = $check_userd->email;
                    $toouser['subject'] = 'Order Confirmation';
                    \Mail::send('user.emails.lightbox_order_confirm', $data, function($message) use ($toouser) {
                        $message->from(CNF_EMAIL, CNF_APPNAME);

                        $message->to($toouser['email']);

                        $message->subject($toouser['subject']);
                    });
                }

                //email to admin
                $uid = \Auth::user()->id;
                $check_adminuserd = \DB::table('tb_users')->where('id', $uid)->first();
                if (!empty($check_adminuserd)) {
                    $adata['msg'] = $msg;
                    $adminuser['email'] = $check_adminuserd->email;
                    $adminuser['subject'] = 'Order Confirmation';
                    \Mail::send('user.emails.lightbox_order_confirm', $adata, function($message) use ($adminuser) {
                        $message->from(CNF_EMAIL, CNF_APPNAME);

                        $message->to($adminuser['email']);

                        $message->subject($adminuser['subject']);
                    });
                }


                if ($del_lightbox_imgs) {
                    return 'success';
                }
            } else {
                return 'error';
            }
        } else {
            return 'error';
        }
    }

    public function lightbox_order_downloadpdf(Request $request, $lid) {
        $downFileName = 'lightbox-order-' . date('d-m-Y') . '.pdf';
        //$cid = $request->input('contentId');
        if ($lid != "" && $lid > 0) {
            $check_order = \DB::table('tb_orders')->where('id', $lid)->count();
            if ($check_order > 0) {
                $fetch_lightcontent = \DB::table('tb_order_items')->join('tb_container_files', 'tb_container_files.id', '=', 'tb_order_items.file_id')->select('tb_order_items.*', 'tb_container_files.file_name', 'tb_container_files.folder_id', 'tb_container_files.file_display_name')->where('tb_order_items.order_id', $lid)->get();
                if (!empty($fetch_lightcontent)) {
                    $html = '<style> .main { margin:0 25px; width:700px; font-family: arial, sans-serif; } .page-break { page-break-after: always; } .header,.footer {width: 100%; position:fixed;} .header { top: 20px; text-align:center;} .footer {bottom: 30px; font-size:10px;} .pagenum:after {content: counter(page);} .imgBox { text-align:center; width:400px; margin:50px auto 30px auto;} .nro { text-align:center; font-size:12px; } .header img { width:250px; height: 50px; } .Mrgtop40 {margin-top:40px;} .Mrgtop20 {margin-top:10px;} .monimg img { width:125px; height:80px; }  .font13 { font-size:13px; } .font12 { font-size:12px; }</style>';
                    $i = 1;
                    foreach ($fetch_lightcontent as $boxcontent) {
                        $userInfo = \DB::table('tb_users')->where('id', $boxcontent->user_id)->first();
                        $companydet = \DB::table('tb_user_company_details')->where('user_id', $boxcontent->user_id)->first();

                        $html .= '<div class="main"><div class="header"><img src="' . \URL::to('sximo/images/logo_janua_pdf.png') . '"></div><br><br><br><div class="footer">© Copyright: Christian Seisenberger Gmbh</div>';

                        $html .= '<div class="Mrgtop40 font13"><table><tr><td width="250"> User-Daten : </td> <td width="20"></td> <td width="250"> User-Daten : </td> </tr> <tr><td valign="top"> ' . $userInfo->first_name . ' ' . $userInfo->last_name . ' </td> <td></td>';
                        if (!empty($companydet)) {
                            $html .= '<td> ' . $companydet->company_address . ' . ' . $companydet->company_address2 . ' <br> ' . $companydet->company_postal_code . ' . ' . $companydet->company_city . ' <br> ' . $companydet->company_country . ' </td>';
                        } else {
                            $html .= '<td></td>';
                        }
                        $html .='</tr> </table></div>';

                        $filedirPath = (new ContainerController)->getContainerUserPath($boxcontent->folder_id);
                        $html .='<div class="imgBox"><img src="' . $filedirPath . $boxcontent->file_name . '" style="height:400px;"></div><p style="text-align:center; font-size:18px;">' . $boxcontent->file_display_name . '</p><p class="nro">(No Rohling — No Blank)</p><br>';

                        if ($boxcontent->type_id == 448) {
                            $html .= '<div class="Mrgtop40 font12"><p>Der SK01 Monolith tisch kann in folgenden Oberflachentonen ausgefuhrt werden - <br>The SK01 Monolith table can be executed in the folloeing surface tones:</p></div>';
                            $html .= '<div class="Mrgtop10 font12"><table class="monimg"><tr><td width="100"><img src="' . \URL::to('sximo/images/shade_black.jpg') . '" /></td><td width="100"><img src="' . \URL::to('sximo/images/shade_grey.jpg') . '" /></td><td width="100"><img src="' . \URL::to('sximo/images/shade_silver.jpg') . '" /></td><td width="100"><img src="' . \URL::to('sximo/images/shade_white.jpg') . '" /></td><td width="100"><img src="' . \URL::to('sximo/images/shade_brown.jpg') . '" /></td></tr><tr><td>Ton Schwarz — <br>Shade black</td><td>Ton Grau — <br>Shade grey</td><td>Ton Silber — <br>Shade silver</td><td>Ton Weiß — <br>Shade white</td><td>Ton Braun — <br>Shade brown</td></tr></table></div>';
                        }
                        $html .='</div><div class="page-break"></div>';
                    }

                    $pdf = \App::make('dompdf.wrapper');
                    $pdf->loadHTML($html);
                    return $pdf->download($downFileName);
                }
            } else {
                return 'error';
            }
        } else {
            return 'error';
        }
    }

}