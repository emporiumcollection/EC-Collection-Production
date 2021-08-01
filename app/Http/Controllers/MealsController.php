<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator,
    Input,
    Redirect;
use File;

class MealsController extends Controller {

    protected $layout = "layouts.main";
    protected $data = array();
    public $module = 'properties';
    static $per_page = '20';

    public function __construct() {

        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->model = new Properties();

        $this->info = $this->model->makeInfo($this->module);
        $this->access = $this->model->validAccess($this->info['id']);

        $this->data = array(
            'pageTitle' => $this->info['title'],
            'pageNote' => $this->info['note'],
            'pageModule' => 'properties',
            'return' => self::returnUrl()
        );
    }

    /**
     * Save config of meals.
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function configMeals(Request $request){
        $return_array = array();
        if (!\Auth::check()){
            $return_array['status'] = 'error';
            $return_array['message'] = 'Errors occurred during save contract!';
            $return_array['errors'] = array("Please login first before saving contract!");
            return $return_array;
        }
        $request_data = $request->all();
        // print_r($request_data); exit;
        $meal_name = $request_data['meal_name'];
        $meal_order = $request_data['meal_order'];
        $check_in = $request_data['meal_check_in'];
        $check_out = $request_data['meal_check_out'];

        if (count($meal_name) > 0) {
            foreach ($meal_name as $key => $value) {
                $value_data = trim($value);
                if (!empty($value_data)) {
                    $data = array(
                        'property_id' => $request_data['property_id'],
                        'meal_name' => $value_data,
                        'meal_order' => $meal_order[$key] ?? 0,
                        'checkin'   => $check_in[$key],
                        'checkout' => $check_out[$key],
                    );
                    \DB::table( 'tb_meals_config')->insert($data);
                }
            }
        }

        $return_array['status'] = 'success';
        $return_array['message'] = 'Meals config saved.';
        $return_array['errors'] = '';
        echo json_encode($return_array);
        exit;
    }

    /**
     * Reset config of meals.
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function resetConfigMeals(Request $request){
        $return_array = array();
        if (!\Auth::check()){
            $return_array['status'] = 'error';
            $return_array['message'] = 'Errors occurred during save contract!';
            $return_array['errors'] = array("Please login first before saving contract!");
            return $return_array;
        }
        $request_data = $request->all();
        $property_id = $request_data['property_id'];

        \DB::table( 'tb_meals_config')->where('property_id', $property_id)->delete();
        \DB::table( 'tb_meals')->where('property_id', $property_id)->delete();

        $return_array['status'] = 'success';
        $return_array['message'] = 'Meals config reset completed.';
        $return_array['errors'] = '';
        echo json_encode($return_array);
        exit;
    }

    /**
     * Add meals.
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    function addMeals(Request $request){
        $return_array = array();
        if (!\Auth::check()){
            $return_array['status'] = 'error';
            $return_array['message'] = 'Errors occurred during save contract!';
            $return_array['errors'] = array("Please login first before saving contract!");
            return $return_array;
        }
        $request_data = $request->all();
        // print_r($request_data); exit;

        $property_id = $request_data['property_id'];
        $meals = $request_data['meals'];
        $boards = $request_data['boards'];

        $i = 0;
        if (count($meals) > 0) {
            \DB::table( 'tb_meals')->where('property_id', $property_id)->delete();
            foreach ($meals as $key => $meals_val) {

                foreach ($meals_val as $mealkey => $mealvalue) {
                    $data = array(
                        'property_id' => $property_id,
                        'board_id' => $boards[$i],
                        'meal_id' => $key,
                        'value' => $mealvalue,
                    );
                    \DB::table( 'tb_meals')->insert($data);
                }
                $i++;
            }
        }

        $return_array['status'] = 'success';
        $return_array['message'] = 'Meals config reset completed.';
        $return_array['errors'] = '';
        echo json_encode($return_array);
        exit;
    }

}
