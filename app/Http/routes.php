<?php
// use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TwilioSMSController;	
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('forget-password', 'Auth\PasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password','Auth\PasswordController@submitForgetPasswordForm')->name('forget.password.post');
Route::get('reset-password/{token}', 'Auth\PasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password','Auth\PasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::get('/logout', 'Auth\AuthController@logout');
Route::post('/sendSMS', 'Auth\AuthController@create');
Route::post('/invitecompanion', 'Auth\AuthController@verify');

Route::post('/sendinvitation','UserController@EmailInvitation');

// Route::post('/invite/companionemail', 'UserController@inviteCompanion');
Route::get('/', 'HomeController@index')->name('homepage');
Route::get('wetransfer', 'PropertiesController@show_wetransfer');
//Routes for new UI changes in Emporium 
Route::get('/users/my-preferences', 'UserController@getPreferences');
Route::post('/postPreference', 'UserController@postPreference');
Route::get('/users/my-preferences/{id}', 'UserController@editPreferences');
Route::get('/users/delete-preferences/{id}', 'UserController@deletePreferences');
Route::get('/users/profile', 'UserController@getProfile');
Route::get('/users/setting', 'UserController@getSettings');
Route::get('/users/guestinvite', 'UserController@getInvite');
Route::get('/users/companion', 'UserController@getCompanion');
// Route::get('/users/companion', 'UserController@getCompanion');


//HotelDetail Routes

Route::get('/hotel/hoteldetail/{id}', 'FrontEnd\PropertyController@getProperty');
Route::get('/hotel/suite/{property_id}', 'FrontEnd\HotelDetailController@suites');
Route::get('/hotel/detailsuite', 'FrontEnd\HotelDetailController@detailsuite');
Route::get('/hotel/architecture', 'FrontEnd\HotelDetailController@architecture');
Route::get('/hotel/spa', 'FrontEnd\HotelDetailController@spa');
Route::get('/hotel/restaurant', 'FrontEnd\HotelDetailController@restaurant');
Route::get('/hotel/detailrestaurant','FrontEnd\HotelDetailController@detailrestaurant');
Route::get('/hotel/location/{id}','FrontEnd\HotelDetailController@location');
Route::get('/hotel/experiences','FrontEnd\HotelDetailController@experiences');
Route::get('/hotel/social','FrontEnd\HotelDetailController@social');
Route::get('/hotel/faq','FrontEnd\HotelDetailController@faq');
Route::post('/add_collection','FrontEnd\HotelDetailController@add_collection');
//HotelDetail Reviews
Route::get('/hotel/get-reviews/{id}','FrontEnd\ReviewController@getPropertyReviews');
Route::post('/hotel/add-reviews','FrontEnd\ReviewController@addreviews');

//

Route::get('/users/security', 'UserController@getSecurity');
Route::get('/users/contracts', 'UserController@getInvoices');
Route::post('/users/savetravelprofile', 'UserController@postSavetravellerprofile');
Route::post('/users/questions', 'UserController@postSecurityQuestion');
Route::post('/users/CardDetail', 'UserController@userCardDetail');
Route::get('/users/CardDetail/{id}', 'UserController@deleteCard');
Route::post('/users/invite', 'UserController@postInvite');
// Route::get('/users/reservation', 'ReservationsController@getReservation');

Route::get('reservation/when/{id}', 'FrontEnd\ReservationController@when');
Route::get('reservation/where', 'FrontEnd\ReservationController@where');
Route::get('reservation/suite', 'FrontEnd\ReservationController@suite');
Route::get('reservation/suiteboard', 'FrontEnd\ReservationController@suiteBoard');
Route::get('reservation/policies', 'FrontEnd\ReservationController@Policies');
Route::get('reservation/services', 'FrontEnd\ReservationController@aditionalServices');
Route::get('reservation/whoistravelling','FrontEnd\ReservationController@whoistravelling');
Route::get('reservation/paymentmethod', 'FrontEnd\ReservationController@paymentmethod');
Route::get('reservation/hotelpolicies', 'FrontEnd\ReservationController@hotelpolicies');
Route::get('reservation/bookingsummary', 'FrontEnd\ReservationController@bookingsummary');
Route::post('/suite', 'FrontEnd\ReservationController@selected_suite');
Route::post('/select/guest', 'FrontEnd\ReservationController@guest');

Route::post('/addresses', 'FrontEnd\ReservationController@addresses');
Route::post('/addcompanion', 'FrontEnd\ReservationController@addcompanion');
Route::post('/storeinTosession', 'FrontEnd\ReservationController@storecompanionTosession');

Route::get('/reservation/receipt', 'FrontEnd\ReservationController@reservationList');

Route::get('/reserve_data', 'FrontEnd\ReservationController@addReservationData');

// Route::post('/users/bookingsummary', 'UserController@bookingsummary');

/**
 * New frontend routes.
 */
Route::get('landing_view', 'PhaseOne\HotelController@landing_view');
Route::get('hotel_details', 'PhaseOne\HotelController@hotel_details');
Route::get('get_inspired', 'PhaseOne\HotelController@get_inspired');
Route::get('hotel_quick_info', 'PhaseOne\HotelController@getHotelQuickInfo');
Route::get('hotel_gallery', 'PhaseOne\HotelController@getHotelGallery');
Route::get('hotel/{title}', 'PhaseOne\HotelController@index');
Route::get('mapsearchavailability', 'PhaseOne\MapBoxController@index');
Route::get('book/reservation', 'PhaseOne\ReservationController@index');

//Datatable route
Route::get('/users/companiondata', 'DatatableController@getDatatable');
Route::get('/users/reservations', 'DatatableController@getreservations');
Route::get('/users/inviteGuest', 'DatatableController@getInviteGuest');
Route::get('/users/preferenceDatatable', 'DatatableController@getPreferencesData');
// Route::get('/users/reservations', 'DatatableController@getreservation');

/**
 * New Admin backend routes.
 */
Route::post('properties/configmeals', 'MealsController@configMeals');
Route::post('properties/resetmeals', 'MealsController@resetConfigMeals');
Route::post('properties/addmeals', 'MealsController@addMeals');

/*
 * AIC: CRM Layout Module
 */
Route::get('memberships', 'HomeController@memberships');
Route::get('membershiptypes', 'HomeController@membershiptypes');
Route::get('press/{id}', 'ContainerController@media_relations');
Route::get('press', 'ContainerController@media_relations');
Route::get('presssearch', 'ContainerController@pressSearchAjax');
Route::get('getPressFolderListAjaxonload/{id}', 'ContainerController@getPressFolderListAjaxonload');

Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap/{type}.xml', 'SitemapController@properties');

Route::group(['middleware' => 'auth'], function()
{
     Route::resource('usercontract', 'UsercontractController');
	//Route::get('crmlayouts', 'CrmlayoutController@index');
	Route::resource('crmlayouts', 'CrmlayoutController');
	Route::get('crmlayouts/delete/{crmlayouts}', 'CrmlayoutController@destroy');
	Route::get('crmlayouts/create_template/{template_id}', 'CrmlayoutController@create_template');
	Route::get('crmlayouts/apply_template/{template_id}', 'CrmlayoutController@apply_template');
	Route::get('crmlayouts/add_new_column/{row_id}/{template_id}', 'CrmlayoutController@add_new_column');

	Route::post('crmlayouts/add_custom_field', 'CrmlayoutController@add_custom_field');
	Route::post('crmlayouts/add_new_row', 'CrmlayoutController@add_new_row');
	Route::post('crmlayouts/add_new_column', 'CrmlayoutController@add_new_column');
	Route::post('crmlayouts/edit_custom_field', 'CrmlayoutController@edit_custom_field');
	Route::get('crmlayouts/delete_custom_field/{id}/{template_id}', 'CrmlayoutController@delete_custom_field');
	Route::get('crmlayouts/delete_crm_element/{id}/{template_id}', 'CrmlayoutController@delete_custom_field');
	Route::get('crmlayouts/delete_crm_element/{id}/{template_id}', 'CrmlayoutController@delete_crm_element');
	Route::get('crmlayouts/duplicate_row/{id}/{template_id}', 'CrmlayoutController@duplicate_row');
	Route::get('crmlayouts/duplicate_group/{id}/{template_id}', 'CrmlayoutController@duplicate_group');
	Route::get('crmlayouts/delete_row/{id}/{template_id}', 'CrmlayoutController@delete_row');
	Route::get('crmlayouts/delete_group/{id}/{template_id}', 'CrmlayoutController@delete_group');
	Route::get('crmlayouts/dupliate_custom_field/{id}/{template_id}', 'CrmlayoutController@dupliate_custom_field');
	Route::get('crmlayouts/dupliate_crm_elements/{id}/{template_id}', 'CrmlayoutController@dupliate_crm_elements');
	Route::post('crmlayouts/ajax_get_custom_field/{id}', 'CrmlayoutController@ajax_get_custom_field');
	Route::post('crmlayouts/ajax_get_crm_element/{id}', 'CrmlayoutController@ajax_get_crm_element');
	Route::post('crmlayouts/save_row_columns', 'CrmlayoutController@save_row_columns');
	Route::post('crmlayouts/save_row_element', 'CrmlayoutController@save_row_element');
	Route::post('crmlayouts/ajax_save_row_columns', 'CrmlayoutController@ajax_save_row_columns');
	Route::post('crmlayouts/ajax_save_group_columns', 'CrmlayoutController@ajax_save_group_columns');
	Route::post('crmlayouts/ajax_save_fields_order', 'CrmlayoutController@ajax_save_fields_order');
	Route::post('crmlayouts/ajax_save_crm_elements_order', 'CrmlayoutController@ajax_save_crm_elements_order');
	Route::post('crmlayouts/ajax_save_rows_order', 'CrmlayoutController@ajax_save_rows_order');
	Route::post('crmlayouts/do_apply_template', 'CrmlayoutController@do_apply_template');
	Route::post('crmlayouts/edit_row_element', 'CrmlayoutController@edit_row_element');

	/*
	* Custom Field Module
	* All Action urls
	*/
	Route::get('evcustomfields', 'EvcustomfieldsController@index');
	Route::post('evcustomfields/createGroup', 'EvcustomfieldsController@createGroupAjax');
	Route::get('evcustomfields/getGroups/{id}', 'EvcustomfieldsController@getGroupsAjax');
	Route::get('evcustomfields/getCustomFields', 'EvcustomfieldsController@getCustomFieldsAjax');
	Route::post('evcustomfields/createField', 'EvcustomfieldsController@createFieldAjax');
	Route::post('evcustomfields/removeCustomField/{id}', 'EvcustomfieldsController@removeCustomFieldAjax');
	Route::post('evcustomfields/removeGroup', 'EvcustomfieldsController@removeGroupAjax');
	Route::get('evcustomfields/editCustomField/{id}', 'EvcustomfieldsController@editCustomFieldAjax');
	Route::post('evcustomfields/updateCustomField/{id}', 'EvcustomfieldsController@updateCustomFieldAjax');
	Route::post('evcustomfields/updateCustomFieldOrders', 'EvcustomfieldsController@updateCustomFieldOrderAjax');
	Route::post('evcustomfields/updateGroupOrders', 'EvcustomfieldsController@updateGroupOrderAjax');

});

/********** Added By Ravinder *********/
Route::get('generate/destination', 'GenerateController@destinationGenerate');
Route::get('generate/hotel', 'GenerateController@hotelGenerate');
Route::get('personalized-service', 'FrontEnd\PersonalizedServiceController@index');
Route::post('personalized-service/save', 'FrontEnd\PersonalizedServiceController@save');

Route::post('personalized-service/ajax_save', 'FrontEnd\PersonalizedServiceController@ajax_save');

Route::post('personalized-service/update', 'FrontEnd\PersonalizedServiceController@update');
Route::get('personalized-service/my-services', 'FrontEnd\PersonalizedServiceController@list_my_services');
Route::get('personalized-service/edit/{ps_id}', 'FrontEnd\PersonalizedServiceController@edit');
Route::get('personalized-service/delete/{ps_id}', 'FrontEnd\PersonalizedServiceController@delete');
Route::controller('/importdata','ImportdataController');
Route::controller('destination','FrontEnd\DestinationController');
/*************** End *************/
Route::controller('home', 'HomeController');

Route::controller('/user', 'UserController');
Route::controller('/customer', 'CustomerController');
Route::get('/traveller', 'CustomerController@traveller');
Route::get('/register/', 'CustomerController@getregister');

Route::get('/supplier', 'CustomerController@supplier');

Route::post('/traveller_skip_preferences', 'CustomerController@skipPreferences');

Route::get('/whoiam', 'CustomerController@whoIam');
Route::post('/viewInvite', 'UserController@viewInvite');
Route::get('/editinvite/{id}', 'UserController@editInvite');
Route::get('deleteinvite/{id}', 'UserController@deleteInvite');

Route::post('/users/addcompanion', 'UserController@addCompanion');
Route::post('/viewcompanion', 'UserController@viewCompanion');
Route::get('/editcompanion/{id}', 'UserController@editCompanion');
Route::get('/deletecompanion/{id}', 'UserController@deleteCompanion');

Route::post('customer_ajaxPostCreate', 'CustomerController@ajaxPostCreate');

Route::post('leadcreate', 'UserController@ajaxLeadCreate');
Route::post('leadupdate', 'UserController@ajaxLeadUpdate');

Route::get('crmhotel/leadlisting', 'Core\UsersController@leadlisting');
Route::get('crmhotel/hoteluserlisting', 'Core\UsersController@hoteluserlisting');
Route::get('crmhotel/travelleruserlisting', 'Core\UsersController@travelleruserlisting');

Route::post('socialinfo', 'UserController@ajaxSocialInfo');

Route::post('customer_ajaxPostSignin', 'CustomerController@ajaxPostSignin');
Route::post('customer_ajaxPostRequest', 'CustomerController@ajaxPostRequest');

include('pageroutes.php');
include('moduleroutes.php');
include('custompageroutes.php');
include('pagemanagementroutes.php');

Route::get('/restric',function(){

	return view('errors.blocked');

});

Route::get('changelang/{lang}', 'HomeController@changeLang');
Route::get('userImport', 'UserimportController@userImportFromDB');
Route::get('propertyimport', 'PropertydataimportController@Propertyimport');
Route::get('propertyimgfix', 'PropertydataimportController@Propertyimagefixes');

Route::get('runInsta', 'instaApiController@runInsta');
Route::get('bars', 'HomeController@barspage');
Route::get('spas', 'HomeController@spaspage');

Route::get('social-youtube', 'FrontEnd\FrontendPagesController@socialYoutube');
Route::get('social-youtube/{cat}', 'FrontEnd\FrontendPagesController@socialYoutube');
Route::get('social-youtube/{continent}/{cat}', 'FrontEnd\FrontendPagesController@socialYoutube');
Route::get('social-youtube/{continent}/{region}/{cat}', 'FrontEnd\FrontendPagesController@socialYoutube');
Route::get('social-youtube/{continent}/{region}/{country}/{cat}', 'FrontEnd\FrontendPagesController@socialYoutube');

Route::get('social-instagram', 'FrontEnd\FrontendPagesController@socialInstagram');
Route::get('social-instagram/{cat}', 'FrontEnd\FrontendPagesController@socialInstagram');
Route::get('social-instagram/{continent}/{cat}', 'FrontEnd\FrontendPagesController@socialInstagram');
Route::get('social-instagram/{continent}/{region}/{cat}', 'FrontEnd\FrontendPagesController@socialInstagram');
Route::get('social-instagram/{continent}/{region}/{country}/{cat}', 'FrontEnd\FrontendPagesController@socialInstagram');

Route::get('social-stream', 'FrontEnd\FrontendPagesController@socialStreamWall');

Route::resource('sximoapi', 'SximoapiController');
Route::group(['middleware' => 'auth'], function()
{

	Route::get('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::post('core/elfinder', 'Core\ElfinderController@getIndex');
	Route::controller('/dashboard', 'DashboardController');
	Route::controllers([
		'core/users'		=> 'Core\UsersController',
		'notification'		=> 'NotificationController',
		'core/logs'			=> 'Core\LogsController',
		'core/pages' 		=> 'Core\PagesController',
		'core/groups' 		=> 'Core\GroupsController',
		'core/template' 	=> 'Core\TemplateController',
	]);

	Route::post('addfolder', 'ContainerController@createfolder');
	Route::post('addfile', 'ContainerController@uploadFile');
	Route::get('folders/{id}', 'ContainerController@getIndex');
	Route::get('getFolderListAjax/{id}', 'ContainerController@getFolderListAjax');
	Route::get('getFolderListAjaxonload/{id}', 'ContainerController@getFolderListAjaxonload');
	Route::get('getFoldersAjax/{id}', 'ContainerController@getFoldersAjax');
	Route::get('getFoldersAjax/{id}/{wnd}', 'ContainerController@getFoldersAjax');
	Route::get('getUserList', 'ContainerController@getUserListAjax');
	Route::post('deletefilefolder', 'ContainerController@deleteFilesFolders');
	Route::post('copyfolderfile', 'ContainerController@copyFilesFolders');
	Route::post('movefolderfile', 'ContainerController@moveFilesFolders');
	Route::get('files/view/{fid}/{id}', 'ContainerController@Showfiles');
	Route::get('tfiles/view/{fid}/{id}', 'ContainerController@ShowTiffFiles');
	Route::post('sendemail', 'EmployeeController@postDoemail');
	Route::post('seletedfileszip', 'ContainerController@DownloadZipSelected');
	Route::post('entirefolderzip', 'ContainerController@DownloadZipEntire');
	Route::post('seletedfileslowPdf', 'ContainerController@DownloadlowPdfSelected');
	Route::post('seletedfileshighPdf', 'ContainerController@DownloadhighPdfSelected');
	Route::post('folderpermission', 'ContainerController@Directorypermission');
	Route::post('makeflipbook', 'ContainerController@makeFlipbook');
	Route::post('sendemail_flipbook', 'ContainerController@DoflipbookEmail');
	Route::get('containeriframe/{id}/{wnd}', 'ContainerController@getIndex');
	Route::get('foldersiframe/{id}/{wnd}', 'ContainerController@getIndex');
	Route::post('globalPermission', 'ContainerController@globalDirectorypermission');
	Route::post('removeglobalPermission', 'ContainerController@removeglobalDirectorypermission');
	Route::get('generateInvoicePdf/{id}', 'InvoicesController@generateInvoicePdf');
	Route::post('editfolder', 'ContainerController@editfolder');
	Route::post('folderdelete', 'ContainerController@folderdelete');
	Route::post('assignAttribute', 'ContainerController@assignAttributefolderfile');
	Route::post('getAttributeOptions', 'ContainerController@getAttributeOptions');
	Route::post('addnewtag', 'ContainerController@addNewTag');
	Route::post('assignTags', 'ContainerController@assignTagsfolderfile');
	Route::post('search_exist_tag', 'ContainerController@search_tag');
	Route::post('remove_exist_tag', 'ContainerController@remove_exist_tag');
	Route::post('remove_exist_attribute', 'ContainerController@remove_exist_attribute');

	Route::get('ifolders/{id}', 'ImapperController@getIndex');
	Route::get('ifiles/view/{fid}/{id}', 'ImapperController@Showfiles');
	Route::get('ifiles/edit/{fid}/{id}', 'ImapperController@Editfiles');
	Route::post('savepin', 'ImapperController@savePinData');

	Route::get('getBillTo/{qury}', 'InvoicesController@fetchuserinfoForbillto');
	Route::post('getprofileBillto', 'InvoicesController@fetchprofileForbillto');
	Route::post('importUsers', 'MyusersController@importUsersCsv');
	Route::post('addtab', 'AttributesController@addTab');
	Route::get('tab_content/{aid}', 'AttributesController@TabContent');
	Route::post('save_tab_content', 'AttributesController@SaveTabContent');
	Route::get('group_content/{aid}', 'AttributesController@GroupContent');
	Route::post('save_group_content', 'AttributesController@SaveGroupContent');
	Route::get('edit_tab_content/{aid}/{tab}', 'AttributesController@EditTabContent');
	Route::post('editfile', 'ContainerController@editfile');
	Route::post('assignMainImage', 'ContainerController@assignMainImage');
	Route::post('seletedfilesfrontend', 'ContainerController@seletedFilesFrontend');
	Route::post('assignDesigner', 'ContainerController@assignDesignercontainer');
	Route::post('unassign_seletedfilesfrontend', 'ContainerController@UnassignSeletedFilesFrontend');
	Route::post('activate_deactivate_product_frontend', 'ContainerController@ActivateDeactivateProductFrontend');
	Route::post('deactivate_hotelhelp', 'ContainerController@deactivateHotelhelp');
	Route::post('addsubimage', 'ContainerController@addSubImageContainerFile');
	Route::post('activate_deactivate_product_slider_images', 'ContainerController@ActivateDeactivateProductSliderImages');
	Route::post('remove_subimage', 'ContainerController@RemoveSubimage');
	Route::post('update_container_sortnum', 'ContainerController@UpdateContainerSortnum');
	Route::post('add_varients', 'ContainerController@AddVarientsfile');
	Route::post('remove_exist_varients', 'ContainerController@RemoveExistVarients');
	Route::get('containersearch', 'ContainerController@containerSearchAjax');
	Route::post('assignTagsFile', 'ContainerController@assignTagsFile');
	Route::post('seletedfilesfrontendslider', 'ContainerController@seletedFrontendSlider');
	Route::post('add_slider_variant_folder', 'ContainerController@create_slider_variant_folders');
	Route::post('landing_page_products', 'ContainerController@landingPageProducts');
	Route::post('seletedfiles_activatelightbox', 'ContainerController@seletedfilesActivatelightbox');
	Route::post('seletedfiles_deactivatelightbox', 'ContainerController@seletedfilesDeactivatelightbox');
	Route::post('activate_deactivate_product_lightbox', 'ContainerController@ActivateDeactivateProductLightbox');

	Route::post('create_lightbox', 'HomeController@create_newlightbox');
	Route::post('delete_lightbox', 'HomeController@lightboxdelete');
	Route::post('lightboxupdatename', 'HomeController@lightboxupdatename');
	Route::post('lightbox_addcontent', 'HomeController@lightboxAddcontents');
	Route::get('lightbox_content_downloadpdf/{cid}', 'HomeController@lightbox_content_downloadpdf');
	Route::post('sendemail_lightbox', 'HomeController@SendEmailLightbox');
	Route::post('lightbox_reserve', 'HomeController@lightboxReserveItems');
	Route::post('delete_lightbox_content', 'HomeController@lightbox_content_delete');
	Route::post('lightbox_addcontent_container', 'ContainerController@lightboxAddcontentsContainer');

	Route::post('delete_attribute_option', 'AttributesController@remove_attribute_option');
	Route::post('copy_attributes', 'AttributesController@copyAttribute');
	Route::post('assignPdfImage', 'ContainerController@assignPdfImage');
	Route::post('delete_shop_product', 'ShopController@remove_shop_product');
	Route::post('getshopcategories', 'ShopController@shop_categories');

	Route::post('shop_order', 'HomeController@place_shop_order');
	Route::post('lightbox_ordered_item_update', 'LightboxordersController@lightbox_ordered_item_update');

	Route::post('seletedfolderslanding', 'ContainerController@assign_landing_products');

	Route::post('enable_diable_field_option', 'CustomfieldsController@enable_diable_field_option');
	Route::post('change_order_num', 'CustomfieldsController@change_fileds_ordering');
	Route::post('enable_diable_category_option', 'CategoriesController@enable_diable_category_option');
	Route::post('change_category_order_num', 'CategoriesController@change_category_ordering');
	Route::post('addGroupTab', 'CustomfieldsController@addGroupTab');
	Route::get('customfields_tabs/{fldid}', 'CustomfieldsController@CustomfieldsTabs');
	Route::get('customfields_group/{fldid}', 'CustomfieldsController@CustomfieldsGroup');
	Route::post('save_customfield_group_content', 'CustomfieldsController@SaveCustomfieldsGroupContent');
	Route::post('getCustomfieldOptions', 'CustomfieldsController@getCustomfieldOptions');
	Route::post('save_customfield_tab_content', 'CustomfieldsController@SaveCustomfieldsTabContent');
	Route::get('customfields_edit_tab_content/{fid}/{tab}', 'CustomfieldsController@CustomfieldsEditTabContent');

	Route::get('properties_settings/{pid}/{tab}', 'PropertiesController@show_settings');

    Route::post('ajax_properties_setting_rooms', 'PropertiesController@ajax_show_settings');

	Route::post('properties_settings/{pid}/{tab}', 'PropertiesController@show_settings');
	Route::post('add_property_type', 'PropertiesController@save_property_type_data');
	Route::post('delete_property_type', 'PropertiesController@delete_property_type');
	Route::post('add_property_category_rooms', 'PropertiesController@save_property_rooms_data');
	Route::post('delete_property_category_rooms', 'PropertiesController@delete_property_room');
	Route::post('copy_category_rooms', 'PropertiesController@copy_category_rooms');
	Route::post('property_images_uploads', 'PropertiesController@property_images_uploads');
    Route::post('event_images_uploads', 'EventsController@event_images_uploads');

	Route::post('property_images_wetransfer', 'PropertiesController@property_images_wetransfer');


	Route::post('delete_property_image', 'PropertiesController@delete_property_image');
	Route::post('save_rooms_amenities', 'PropertiesController@save_rooms_amenities');
	Route::post('add_property_category_rooms_price', 'PropertiesController@save_property_rooms_price_data');
	Route::post('change_property_type', 'PropertiesController@change_property_type');
	Route::post('enable_diable_propertystatus', 'PropertiesController@enable_diable_propertystatus');
	Route::post('get_category_rooms_reservations', 'PropertiesController@get_category_rooms_reservations');

    Route::post('enable_diable_hotel_approval', 'PropertiesController@enable_diable_hotelApproval');

	Route::post('add_new_reservation', 'PropertiesController@add_new_reservation');
	Route::post('add_new_booking', 'HomeController@new_booking');

	Route::post('add_season_details', 'SeasonsController@add_season_details');
	Route::post('add_season_dates_details', 'SeasonsController@add_season_dates_details');
	Route::post('delete_season_data', 'SeasonsController@delete_season_data');
	Route::post('delete_season_dates_data', 'SeasonsController@delete_season_dates_data');

	Route::post('deleteUserAds', 'UserController@deleteUserAds');
	Route::post('delete_selected_image', 'PropertiesController@delete_selectedproperty_image');
	Route::post('fetch_property_info', 'CrmhotelController@fetch_property_info');
	Route::post('fetch_company_info', 'CrmhotelController@fetch_company_info');

    Route::post('fetch_property_company_info', 'CrmhotelController@fetch_property_company_info');
    Route::post('fetch_user_info', 'CrmhotelController@fetch_user_info');

	Route::post('emailCRM', 'CrmhotelController@emailCRM');

    Route::post('emailInviteCRM', 'CrmhotelController@emailInviteCRM');

	Route::get('pull_property_hotels', 'CrmhotelController@pull_property_hotels');
	Route::post('getfolderlistforselectoptions', 'ContainerController@fetchFolderTreeOptions');
    Route::post('getPropertyRates', 'PropertiesController@getPropertyRates');

	Route::post('gallery_images_uploads', 'CitycontentController@gallery_images_uploads');
	Route::post('delete_gallery_image', 'CitycontentController@delete_gallery_image');

	Route::post('enable_diable_sliderstatus', 'SliderController@enable_diable_sliderstatus');
	Route::post('change_order_num_sliders', 'SliderController@change_sliders_ordering');
	Route::post('change_order_num_pagessliders', 'PagessliderController@change_pagessliders_ordering');
	Route::post('enable_diable_pagessliderstatus', 'PagessliderController@enable_diable_pagessliderstatus');

	Route::get('fetchpackagedetails/{pckid}', 'HomeController@fetchpackagedetails');
	Route::get('userorder_downloadinvoicepdf/{ordid}', 'UserorderController@ordersdownloadinvoicepdf');

    Route::get('userorderdownloadinvoicepdf/{ordid}', 'UserorderController@userordersdownloadinvoicepdf');

	Route::post('delete_menu_image', 'Sximo\MenuController@deleteMenuImage');
	Route::get('restaurant_reservations/{id}', 'RestaurantController@restroReservations');
	Route::get('bar_reservations/{id}', 'BarController@barReservations');
	Route::get('spa_reservations/{id}', 'SpaController@spaReservations');

    Route::post('deleteUserAds', 'UserController@deleteUserAds');
    Route::post('save_new_profile', 'UserController@saveNewprofile');

    Route::post('save_new_hotel_profile', 'UserController@saveNewHotelprofile');
    Route::post('save_new_supplier_profile', 'UserController@saveNewSupplierprofile');
    Route::post('save_new_traveller_profile', 'UserController@saveNewTravellerProfile');

    Route::post('save_new_company_details', 'UserController@saveNewcompanydetails');
    Route::post('confirm_new_profile', 'UserController@confirmNewprofile');

    Route::get('signup-contract/{isview}', 'ContractController@download_signup_contract');
    Route::get('supplier-contract/{isview}', 'ContractController@download_supplier_contract');

    Route::post('ownhotelsetup', 'UserController@ownhotelsetup');
    Route::post('hotelavaibility', 'UserController@hotelavaibility');
    Route::post('suppliercommissiontype', 'UserController@suppliercommissiontype');

    Route::post('upload_contract', 'PropertiesController@contract_upload');

    Route::post('package_skip', 'CustomerController@skipPackage');

    Route::post('hotel/subtractfee', 'FrontEnd\HotelMembershipController@subtractfee');

    Route::get('downloadrequirementsheet/{filename}', 'UserorderController@downloadrequirementsheet');

    Route::get('addhotel', 'PropertiesController@addhotel');

    Route::get('get_setup', 'PackagesController@get_setup');

    Route::post('save_hotel_info', 'PropertiesController@saveHotelInfo');
    Route::post('save_hotel_architect_info', 'PropertiesController@saveHotelArchitectInfo');
    Route::post('save_hotel_social_info', 'PropertiesController@saveHotelSocialInfo');
    Route::post('check_hotel_setup', 'PropertiesController@checkHotelSetup');

    Route::post('priceonrequest', 'CustomerController@priceonrequest');

    Route::post('confirmreservation', 'PropertiesController@confirmreservation');

    Route::post('get_b2ccategory_rooms_reservations', 'PropertiesController@get_b2ccategory_rooms_reservations');

    Route::post('get_reservation_details', 'PropertiesController@get_reservation_details');

    Route::post('user_arrival_departure', 'PropertiesController@user_arrival_departure');
    Route::post('user_arrival_departure_cancelations', 'PropertiesController@user_arrival_departure_cancelations');

    Route::get('reservations', 'PropertiesController@reservations');
    Route::get('hotelpackages', 'FrontEnd\HotelMembershipController@packages');
    Route::get('qualityassurances', 'PropertiesController@qualityassurances');

    Route::post('salesoverview', 'PropertiesController@salesoverview');

    Route::get('salesreport', 'PropertiesController@salesreport');
    Route::get('arrivaldeparture', 'PropertiesController@arrivaldeparture');
    Route::get('advertising', 'PropertiesController@advertising');

    Route::get('hotelcontainer', 'ContainerController@hotelcontainer');

    Route::get('flipview/{filename}', 'PropertiesController@flipview');

    Route::get('conatinerflip/{filename}', 'PropertiesController@conatinerflip');

    Route::get('flipviewpdf/{filename}', 'UserorderController@flipviewpdf');

    Route::get('hotelinvoices', 'UserorderController@hotelinvoices');

    Route::get('ordershow/{id}', 'UserorderController@ordershow');

    Route::get('bookingshow/{id}', 'BookingsController@bookingshow');

    Route::get('searchbooking', 'BookingsController@searchbooking');
    Route::post('searchbookingresult', 'BookingsController@searchbookingresult');

    Route::post('salesstats', 'PropertiesController@salesstats');
    Route::post('save_management_personnel', 'UserController@savemanagementpersonnel');

    Route::post('getPropertyTypeRates', 'PropertiesController@getPropertyTypeRates');

    Route::get('ajaxcalendar', 'FrontEnd\PropertyController@ajaxcalendar');

    Route::get('ajaxnextprevmonth', 'FrontEnd\PropertyController@ajaxnextprevmonth');
   	Route::post('change_order_num', 'PackagesController@change_ordering');

    Route::post('pdproomavailability', 'HomeController@ajaxcheckavailability');

    Route::post('changeRoomStatus', 'PropertiesController@changeRoomStatus');

   	Route::post('resturant_images_uploads', 'RestaurantController@resturant_images_uploads');
    Route::post('delete_restaurant_image', 'RestaurantController@delete_restaurant_image');
    Route::post('delete_rest_selected_image', 'RestaurantController@delete_selected_image');

    Route::post('event_images_uploads', 'EventsController@event_images_uploads');
   	Route::post('delete_event_image', 'EventsController@delete_event_image');
    Route::post('delete_selected_event_image', 'EventsController@delete_selected_event_image');

    Route::post('addmenutitle', 'RestaurantController@addmenutitle');

    Route::post('spa_images_uploads', 'SpaController@spa_images_uploads');
    Route::post('bar_images_uploads', 'BarController@bar_images_uploads');

    Route::post('add_event_type', 'EventsController@save_event_type_data');
    Route::post('delete_event_ticket_type', 'EventsController@delete_event_ticket_type');

   	Route::post('add_event_season_details', 'SeasonsController@add_event_season_details');
	Route::post('add_event_season_dates_details', 'SeasonsController@add_event_season_dates_details');
	Route::post('delete_event_season_data', 'SeasonsController@delete_event_season_data');
	Route::post('delete_event_season_dates_data', 'SeasonsController@delete_event_season_dates_data');
    Route::post('get_event_seasons', 'SeasonsController@get_event_seasons');
    Route::post('add_event_term', 'EventsController@save_event_term');
    Route::post('add_event_ticket_price', 'EventsController@save_event_ticket_price');

    Route::post('addtagtitle', 'TagmanagerController@addtagtitle');
});

Route::post('globalavailability', 'FrontEnd\PropertyController@propertyglobalavailability');
Route::post('getpdppage', 'FrontEnd\PropertyController@getpdppage');
Route::post('getdestinationpage', 'FrontEnd\PropertyController@getdestinationpage');

Route::get('globalsearchavailability', 'FrontEnd\PropertyController@globalsearchavailability');
Route::get('searchavailability', 'FrontEnd\PropertyController@propertySearchAvailability');
Route::get('featuredproperty', 'FrontEnd\PropertyController@featuredProperty');
Route::get('property/prices', 'FrontEnd\PropertyController@propertyRoomPrices');
Route::get('property/refresh-map/{lat}/{lng}', 'FrontEnd\PropertyController@refreshMap');
Route::get('api/property/{id}', 'FrontEnd\PropertyController@apiPropertyDetail');

Route::post('getyoutubechannel', 'FrontEnd\FrontendPagesController@getyoutubechannel');
Route::post('getinstagramchannel', 'FrontEnd\FrontendPagesController@getinstagramchannel');
Route::post('getDropdownBreadcrumb', 'FrontEnd\PropertyController@getDropdownBreadcrumb');
Route::post('getSearchDropdownBreadcrumb', 'FrontEnd\PropertyController@getSearchDropdownBreadcrumb');
Route::post('propcollection', 'FrontEnd\PropertyController@propcollection');
Route::post('searchpropcollection', 'FrontEnd\PropertyController@searchpropcollection');
Route::post('propertybycollection', 'FrontEnd\PropertyController@propertybycollection');
Route::post('searchpropertybycollection', 'FrontEnd\PropertyController@searchpropertybycollection');

Route::get('propertyimagesbypid', 'FrontEnd\PropertyController@propertyimagesbypid');

Route::get('galleryimages', 'FrontEnd\PropertyController@galleryimages');
Route::get('quickinfo', 'FrontEnd\PropertyController@quickinfo');
Route::get('restaurantimagebyid', 'FrontEnd\PropertyController@restaurantimagebyid');
Route::get('suiteimagebyid', 'FrontEnd\PropertyController@suiteimagebyid');
Route::get('suitesbyid', 'FrontEnd\PropertyController@suitesbyid');
Route::get('suitedetails', 'FrontEnd\PropertyController@suitedetails');

Route::post('propertysearchlistbycollection', 'FrontEnd\PropertyController@propertysearchlistbycollection');

Route::post('hotel_membership', 'FrontEnd\HotelMembershipController@hotelMembershipSignupSave');

Route::get('hotel/membership', 'FrontEnd\HotelMembershipController@membershipSignup');
Route::post('hotel/membership', 'FrontEnd\HotelMembershipController@membershipSignupSave');
Route::get('hotel/package', 'FrontEnd\HotelMembershipController@hotelPackage');
Route::get('hotel/advertiser', 'FrontEnd\HotelMembershipController@advertisementPackage');
Route::get('hotel/cart', 'FrontEnd\HotelMembershipController@hotelCart');
Route::get('hotel/add_package_to_cart', 'FrontEnd\HotelMembershipController@addToCartAjax');
Route::post('hotel/getAdvertPrice', 'FrontEnd\HotelMembershipController@getAdvertPriceAjax');
Route::get('hotel/checkout', 'FrontEnd\HotelMembershipController@hotelCheckout');
Route::get('thanks', 'FrontEnd\HotelMembershipController@getThanks');
Route::get('removecartitem', 'FrontEnd\HotelMembershipController@getCartItemRemovedAjax');
Route::get('removesuppliercartitem', 'FrontEnd\HotelMembershipController@getSupplierCartItemRemovedAjax');
Route::get('advertiser/package', 'FrontEnd\AdvertisementController@advertisementPackage');

Route::get('hotel/transferimages', 'FrontEnd\PropertyimagesmanagementController@propertyImageupload');
Route::post('hotel/transferaddfile', 'FrontEnd\PropertyimagesmanagementController@transferaddfile');
Route::post('hotel/transferaddfilessend', 'FrontEnd\PropertyimagesmanagementController@transferaddfilessend');
Route::get('download-document/{code}', 'FrontEnd\PropertyimagesmanagementController@downloadFileCrm');
Route::get('hotel/propertyimagereminder', 'FrontEnd\PropertyimagesmanagementController@propertyimageReminder');

Route::get('advertiser/cart', 'FrontEnd\AdvertisementController@advertiserCart');
Route::get('advertiser/add_package_to_cart', 'FrontEnd\AdvertisementController@addToCartAjax');
Route::post('advertiser/getAdvertPrice', 'FrontEnd\AdvertisementController@getAdvertPriceAjax');
Route::get('advertiser/checkout', 'FrontEnd\AdvertisementController@advertiserCheckout');

Route::get('fetchadvertisementpackagedetails/{pckid}', 'FrontEnd\AdvertisementController@fetchadvertisementpackagedetails');

Route::get('hotel/propertymanagement', 'FrontEnd\PropertymanagementController@propertyManagementList');
Route::get('hotel/propertymanagement/property-detail/{propid}', 'FrontEnd\PropertymanagementController@propertyManagementDetail');
Route::post('hotel/propertymanagement/savepropertydetail', 'FrontEnd\PropertymanagementController@propertyManagementSaveDetail');

Route::post('frontend_hotelpost', 'HomeController@addHotelInfoFrontend');
Route::post('save_previous_page_image', 'HomeController@save_previous_page_image');
Route::post('_ajax_login', 'HomeController@ajax_login');
Route::post('add_new_room_booking', 'HomeController@new_room_booking');
Route::get('getflipbook/{uniq}', 'ContainerController@getFlipbook');
Route::get('getslideshow/{uniq}', 'ContainerController@getSlideshow');
Route::get('post/{news_title}', 'HomeController@show_full_news');
Route::get('subproduct/{fid}', 'HomeController@subProductPage');
Route::get('subproductmasonry/{fid}', 'HomeController@subProductPage');
Route::get('feature/{pid}', 'HomeController@ProductDetail');
Route::get('projectdetail/{pro_id}', 'HomeController@show_full_project');
Route::get('productsearch', 'HomeController@productSearch');
Route::get('downloadproduct/{parent}/{proname}', 'HomeController@downloadProduct');
Route::get('downloadaszip/{fid}', 'HomeController@downloadZip');
Route::get('service/{ser_id}', 'HomeController@show_service_detail');
Route::post('save_query', 'HomeController@save_contact_queries');
Route::get('designer/{des_name}', 'HomeController@show_designer_detail');
Route::get('submaterials/{fid}', 'HomeController@subMaterialsPage');
Route::get('databanken/{fid}', 'HomeController@databankenPage');
Route::get('downloadhighresaszip/{fid}', 'HomeController@downloadHighresZip');
Route::get('productgallery/{parent}/{proname}', 'HomeController@downloadProduct');
Route::get('ViewFlipbookFrontend/{pdfId}', 'HomeController@ViewFlipbookFrontend');

//seo urls
Route::get('product/{pname}', 'HomeController@MakeProductSeoUrls');
Route::get('product/{parent}/{proname}', 'HomeController@MakeProductdetailSeoUrls');
Route::get('material/{mname}', 'HomeController@MakeMaterialSeoUrls');

//Shop URL(s)
Route::get('product-grid-shuffle', 'HomeController@listShopProducts');
Route::get('product-grid-shuffle/{cat}', 'HomeController@listShopProducts');
Route::get('product-grid-shuffle/{cat}/{cat_title}', 'HomeController@listShopProducts');
Route::get('products/{id}/{slug}', 'HomeController@viewShopProduct');
Route::get('products/{id}', 'HomeController@viewShopProduct');

Route::post('ajax-product-grid-shuffle', 'HomeController@ajax_listShopProducts');
Route::post('get-product-by-title', 'HomeController@getProductByTitle');
Route::post('products/{id}/{slug}', 'HomeController@viewShopProduct');

//Content URL(s)
Route::get('content-grid-shuffle', 'HomeController@contentGridShuffle');
Route::post('ajax-content-grid-shuffle', 'HomeController@ajax_contentGridShuffle');
Route::get('article/{id}', 'HomeController@viewArticleDetails');
Route::post('get-article-by-title', 'HomeController@getArticleByTitle');

// property search urls
Route::get('getproperty/{id}', 'HomeController@getPropertyQuickView');
Route::get('search-property-ajax', 'FrontEnd\PropertyController@getSearchPropertyAjax');
Route::get('propertyimagebyid/{propid}', 'FrontEnd\PropertyController@getPropertyImageById');
Route::get('container-image/{id}', 'FrontEnd\PropertyController@getContainerImageById');
Route::get('propertysliderimagebyid/{propid}', 'FrontEnd\PropertyController@getPropertySliderImageById');
Route::get('radtempimage/{propid}/{fileid}', 'FrontEnd\PropertyController@getPropertyImageByFileID');
Route::post('ajax-rproperty-images/{propid}/{limit}', 'FrontEnd\PropertyController@getPropertyAjaxFilesByID');
Route::get('{slug}', 'FrontEnd\PropertyController@getPropertyDetail');
Route::get('{slug}/restaurant', 'FrontEnd\RestaurantFrontController@propertyRestrurant');

Route::get('{slug}/events', 'FrontEnd\PropertyController@getEventsDetail');

Route::get('restaurants/{slug}', 'FrontEnd\RestaurantFrontController@restrurantDetail');
Route::get('bars/{slug}', 'FrontEnd\RestaurantFrontController@barDetail');
Route::get('spas/{slug}', 'FrontEnd\RestaurantFrontController@spaDetail');
Route::get('reserve_resto_table_request', 'FrontEnd\RestaurantFrontController@reserveRestoTableRequest');
Route::post('resturantspabar_by_typecity_ajax', 'FrontEnd\RestaurantFrontController@resturantSpaBarByTypeCityAjax');
Route::post('resturantspabarSearch_ajax', 'FrontEnd\RestaurantFrontController@resturantSpaBarSearchAjax');
Route::get('pdp/{slug}', 'FrontEnd\PropertyController@getPropertyDetail');
Route::get('search', 'FrontEnd\PropertyController@propertySearch_latest');

Route::get('our-collection-pages/{slug}/{page}', 'HomeController@getPropertyDetail_pages');
Route::get('book-property/{slug}', 'HomeController@bookProperty');

Route::get('luxurytravel/{slug}/{type}', 'FrontEnd\PropertyController@getPropertyGridListByCollectionCategory');

Route::get('luxurytravel/{slug}', 'FrontEnd\PropertyController@getPropertyGridListByCategory');
Route::get('ourcollections/{id}', 'HomeController@getPropertyByCategoryQuickView');
//Route::get('search', 'HomeController@SearchLuxuryExperience');
Route::get('luxury_experience/{cat}', 'FrontEnd\PropertyController@propertySearch');
//Route::get('luxury_experience/{cat}/{membershiptype}', 'FrontEnd\PropertyController@propertySearch');
Route::get('luxury_destinations/{cat}', 'FrontEnd\PropertyController@propertySearch');
//Route::get('luxury_destinations/{cat}/{membershiptype}', 'FrontEnd\PropertyController@propertySearch');
Route::get('luxury_destinations/{continent}/{cat}', 'FrontEnd\PropertyController@propertySearch');
//Route::get('luxury_destinations/{continent}/{cat}/{membershiptype}', 'FrontEnd\PropertyController@propertySearch');
Route::get('luxury_destinations/{continent}/{region}/{cat}', 'FrontEnd\PropertyController@propertySearch');
//Route::get('luxury_destinations/{continent}/{region}/{cat}/{membershiptype}', 'FrontEnd\PropertyController@propertySearch');
Route::get('luxury_destinations/{continent}/{region}/{country}/{cat}', 'FrontEnd\PropertyController@propertySearch');
//Route::get('luxury_destinations/{continent}/{region}/{country}/{cat}/{membershiptype}', 'FrontEnd\PropertyController@propertySearch');

Route::get('luxury_hotels/{cat}', 'FrontEnd\PropertyController@propertySearch');
Route::get('getpropertygallery/{id}/{type}', 'HomeController@getPropertyGalleryQuickView');
Route::get('getpropertyroomimages/{id}', 'FrontEnd\PropertyController@getPropertyRoomimageGalleryView');
Route::get('getpropertytypedetail/{id}', 'FrontEnd\PropertyController@getPropertyTypeQuickView');
Route::post('filter_category_destionation', 'HomeController@getPropertyByCategoryDestination');
//Route::get('choosepackage/{id}', 'HomeController@index');

Route::get('download_contract/{lid}', 'ContractController@download_contract');

Route::post('find_property_by_name', 'HomeController@find_property_by_name');
Route::get('getRooms/{slug}', 'PropertiesDetailController@getRoomsAjax');
Route::group(['prefix' => 'api', 'after' => 'allowOrigin'], function() {
   Route::get('user', 'ApiController@userProfileSave');
   Route::get('user/{id}', 'ApiController@retriveUserprofile');
   Route::get('user/update/{id}', 'ApiController@userProfileUpdate');

});


Route::get('choose/{mid}', 'UserController@chosepay');
Route::get('bankdetails/{uid}', 'UserController@showBankDetails');
Route::post('bank_agree', 'UserController@bankAgree');
Route::post('getUserprofile', 'UserController@getUserprofile');
Route::get('stripedetails/{uid}', 'StripepaymentController@index');


Route::get('choosepackage/{packageid}', 'StripepaymentController@checkout');
Route::post('order-post', 'StripepaymentController@checkoutPost');
Route::post('wizard-order-post', 'StripepaymentController@wizardcheckoutPost');
Route::post('wizard-subtract-fee', 'StripepaymentController@wizardSubtractFee');
Route::post('traveller-order-post', 'StripepaymentController@travellercheckoutPost');
Route::post('supplier-order-post', 'StripepaymentController@suppliercheckoutPost');
// Add this route for checkout or submit form to pass the item into paypal
Route::post('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@choosePayment',
));

Route::post('adspayment', array(
	'as' => 'adspayment',
	'uses' => 'PaypalController@advertisementPayment',
));

Route::post('save_new_adspayment', array(
	'as' => 'save_new_adspayment',
	'uses' => 'PaypalController@saveNewadspayment',
));

// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));

Route::get('adspayment/status', array(
	'as' => 'adspayment.status',
	'uses' => 'PaypalController@getadsPaymentStatus',
));

Route::group(['middleware' => 'auth' , 'middleware'=>'sximoauth'], function()
{

	Route::controllers([
		'sximo/menu'		=> 'Sximo\MenuController',
		'sximo/config' 		=> 'Sximo\ConfigController',
		'sximo/module' 		=> 'Sximo\ModuleController',
		'sximo/tables'		=> 'Sximo\TablesController'
	]);



});

Route::filter('allowOrigin', function($route, $request, $response)
{
    $response->header('access-control-allow-origin','*');
});

Route::resource('sximoapi', 'SximoapiController');

Route::controller('restaurantfront/{id}', 'FrontEnd\RestaurantFrontController');
Route::controller('luxury-travel/{slug}', 'FrontEnd\PresentationController');
Route::get('getEventPackages/{eventID}', 'FrontEnd\RestaurantFrontController@getEventPackages');

Route::get('traveller/bookings', 'BookingsController@travellerBookings');
Route::get('traveller/bookings/show/{id}', 'BookingsController@showBooking');

Route::get('hotel/bookings', 'BookingsController@hotelBookings');
Route::post('customer_request_referral', 'CustomerController@ajaxSendMail');

//Route::get('press/view/{fid}/{id}', 'ContainerController@PressShowfiles');

Route::get('press/view/{fid}/{id}', 'ContainerController@PressShowfilesAjax');

Route::get('tpress/view/{fid}/{id}', 'ContainerController@PressShowTiffFiles');
Route::get('getPressFolderListAjax/{id}', 'ContainerController@getPressFolderListAjax');

Route::get('getPressFoldersAjax/{id}', 'ContainerController@getPressFoldersAjax');
Route::post('pressseletedfileszip', 'ContainerController@PressDownloadZipSelected');
Route::post('pressseletedfileslowPdf', 'ContainerController@PressDownloadlowPdfSelected');
Route::post('pressseletedfileshighPdf', 'ContainerController@PressDownloadhighPdfSelected');

Route::get('hotel/get_cart', 'FrontEnd\HotelMembershipController@getwizardCart');

Route::post('hotel/update_cart', 'FrontEnd\HotelMembershipController@postwizardCart');

Route::get('hotel/get_checkout', 'FrontEnd\HotelMembershipController@getwizardCheckout');

Route::get('hotel/add_package_to_cart_wizard', 'FrontEnd\HotelMembershipController@addToCartWizardAjax');

Route::get('hotel/thanks/{id}', 'FrontEnd\HotelMembershipController@hotelThanks');

Route::get('supplier/get_cart', 'FrontEnd\HotelMembershipController@getsupplierwizardCart');
Route::post('supplier/update_cart', 'FrontEnd\HotelMembershipController@postwizardCart');
Route::get('supplier/get_checkout', 'FrontEnd\HotelMembershipController@getsupplierwizardCheckout');
Route::get('supplier/add_package_to_cart_wizard', 'FrontEnd\HotelMembershipController@addToCartSupplierWizardAjax');
Route::get('supplier/thanks/{id}', 'FrontEnd\HotelMembershipController@hotelThanks');


Route::get('traveller/add_package_to_cart_wizard', 'FrontEnd\HotelMembershipController@addToCartTravellerWizardAjax');
Route::get('traveller/get_cart', 'FrontEnd\HotelMembershipController@getTravellerWizardCart');
Route::post('traveller/free_membership', 'StripepaymentController@freeMembership');
Route::get('traveller/thanks/{order_id}', 'StripepaymentController@thanks');
//Route::get('traveller/get_checkout', 'FrontEnd\HotelMembershipController@getTravellerWizardCheckout');
Route::post('traveller/get_checkout', 'FrontEnd\HotelMembershipController@getTravellerWizardCheckout');
Route::post('membershiptype/popup', 'HomeController@membershipPopup');
Route::post('traveller/businessdetails', 'CustomerController@businessdetails');
Route::post('traveller/persondetails', 'CustomerController@persondetails');
Route::get('traveller/invoices', 'UserorderController@travellerinvoices');
Route::get('traveller/invoice/{id}', 'UserorderController@ordershow');
Route::get('traveller/getMapReservation', 'BookingsController@getMapReservation');
Route::get('traveller/checkroomavailability', 'BookingsController@checkroomavailability');
Route::get('traveller/checkroomavailabilitybydates', 'BookingsController@checkroomavailabilitybydates');
Route::get('traveller/checkcategoryavailability', 'BookingsController@checkcategoryavailability');

Route::get('traveller/get_daywise_price', 'HomeController@get_daywise_price');

Route::get('{slug}/room-availability', 'FrontEnd\PropertyController@roomavailability');

Route::post('topSearch', 'FrontEnd\PropertyController@topSearch');

Route::post('price_on_request', 'HomeController@price_on_request');

Route::get('property-image/resize/{scale}/{path}/{file}/{type}', 'ImageController@resize');
Route::get('room-image/resize/{scale}/{path}/{category}/{file}', 'ImageController@roomImageResize');
