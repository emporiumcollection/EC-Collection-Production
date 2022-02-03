<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\Categories;
use Config;
trait Category {

    private $parents = [];

    public function destinationTree(){
        $categories=[];

        
        $categories = explode(",", Config::get('app.root_destinations'));
        
        $rootCategories = Categories::select(['id', 'parent_category_id', 'category_name', 'category_image', 'category_instagram_tag', 'category_alias'])
        ->whereIn('id', $categories)
        ->where('is_hotels_available', '=', 1)
        ->orderBy('category_name', 'asc')
        ->get()
        ->toArray();

        foreach($rootCategories as $key => $category){
            $rootCategories[$key]['children'] = $this->getCategoryChild($category['id']);
        }

        return $rootCategories;
    }

    private function getCategoryChild($parent_id){
        $categories = Categories::select(['id', 'parent_category_id', 'category_name', 'category_image', 'category_instagram_tag', 'category_alias'])
        ->where('parent_category_id', '=', $parent_id)
        ->where('is_hotels_available', '=', 1)
        ->orderBy('category_name', 'asc')
        ->get()
        ->toArray();

        foreach($categories as $key => $category){
            $categories[$key]['children'] = $this->getCategoryChild($category['id']);
        }

        return $categories;
    }

    private function getCategoryParent($id){
        $categories = Categories::select(['id', 'category_name', 'parent_category_id'])
        ->where('id', '=', $id)
        ->orderBy('category_order_num', 'asc')
        ->get()
        ->toArray();

        foreach($categories as $key => $category){
            $categories[$key]['parent'] = $this->getCategoryParent($category['parent_category_id']);
        }

        return $categories;
    }

    /**
     * This function find parents from bottom to top
     * so first finds parents tree and then it assigns children against parent
    */
    public function getTrendingFilters(){
        $cacheKey = 'trandiingfilters';
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        $filters = [];
        $categories = Categories::select(['id', 'category_name', 'parent_category_id'])
        ->where('trending_destination', '=', 1)
        ->orderBy('category_order_num', 'asc')
        ->get()
        ->toArray();

        foreach($categories as $key => $category){
            //Find parents of category in tree
            $categories[$key]['parent'] = $this->getCategoryParent($category['parent_category_id']);
            //format array ['category_id'] => [parents e.g 1,2,3]
            $this->formatCategories($categories[$key], $category['id']);

            //arrang parent => children
            foreach($this->parents[$category['id']] as $parent){
                unset($categories[$key]['parent']);
                $filters[$parent][] = $category;
            }            
        }
        
        Cache::store('file')->put($cacheKey, $filters, 100000);

        return $filters;
    }

    private function formatCategories($category, $cat_id){
        if(!empty($category['parent'])){
            foreach($category['parent'] as $parent){
                unset($this->parents[$cat_id]);
                $this->parents[$cat_id][] = $parent['category_name'];
                $categories = $this->formatCategories($parent, $cat_id);
            }   
        }
    }

}
