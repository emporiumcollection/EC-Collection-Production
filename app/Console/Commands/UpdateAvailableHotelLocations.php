<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
use App\Models\categories;
use App\Http\Traits\Category;
use DB;

class UpdateAvailableHotelLocations extends Command
{
    use Category;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'available-hotel-location';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backend process to collect hotel data and rates';

    private $parents = [];
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('tb_categories')->update(['is_hotels_available'=> 0]);

        $cities = properties::select(['city'])
        ->where('property_status', '=', 1)
        ->groupBy('city')
        ->get()
        ->toArray();

        $allCities = [];
        foreach($cities as $city){
            $allCities[] = $city['city'];
        }
        
        $categories = categories::select(['id', 'parent_category_id'])
        ->whereIn('category_name', $allCities)
        ->get()
        ->toArray();

        $filters = [];
        foreach($categories as $key => $category){
            //Find parents of category in tree
            $categories[$key]['parent'] = $this->getCategoryParent($category['parent_category_id']);
            //format array ['category_id'] => [parents e.g 1,2,3]
            $this->formatAllCategories($categories[$key], $category['id']);

            //arrang parent => children
            if(!empty($this->parents[$category['id']])){
                foreach($this->parents[$category['id']] as $parent){
                    unset($categories[$key]['parent']);
                    $filters[$parent][] = $category;
                }
            }         
        }

        foreach($filters as $cat => $subcats){
            DB::table('tb_categories')->where('category_name', '=', $cat)->update(['is_hotels_available'=> 1]);

            foreach($subcats as $scat){
                DB::table('tb_categories')->where('id', '=', $scat['id'])->update(['is_hotels_available'=> 1]);                
            }
        }

        print 'All locations marked as hotels available';
    }

    private function formatAllCategories($category, $cat_id){
        if(!empty($category['parent'])){
            foreach($category['parent'] as $parent){
                $this->parents[$cat_id][] = $parent['category_name'];
                $categories = $this->formatAllCategories($parent, $cat_id);
            }   
        }
    }

}