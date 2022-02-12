<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\PropertyCategoryTypes;
use App\Models\PropertyRooms;
use App\Models\properties;
use App\Helpers\CommonHelper;
use DB, Auth;

class CreateRoomRecords extends Command
{
    protected $signature = 'create-room-records';

    protected $description = 'Creates the missing rooms for each property suite types';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $properties = Properties::with(['suites' => function($q){
            return $q->with(['rooms']);
        }])->get();
        foreach($properties as $key => $property){
            foreach($property->suites as $suite){
                if(empty($suite->rooms->toArray())){
                    if($suite->status == 0){
                        $data['property_id'] = $property->id;
                        $data['category_id'] = $suite->id;
                        $data['room_name'] = $suite->category_name . ' ROOM';
                        $data['active_full_year'] = '2022-01-01';
                        $data['room_active_from'] = '2024-12-31';
                        $data['user_id'] = 1;
                        $data['status'] = 1;
                        $data['num_beds'] = 0;
                        $data['suite_size'] = 0;
                        $data['corona_guidelines'] = '';
                        $data['corona_link'] = '';
                        $room = PropertyRooms::create($data);
                        print $room->id . ' = Room created for ' . $property->property_name . ' > ' . $suite->category_name . "\n";
                    }
                }
            }
        }
    }
}
