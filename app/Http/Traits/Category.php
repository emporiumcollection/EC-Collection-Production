<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\Categories;

trait Category {
    private $VOYAGE_ROOT_DESTINATIONS = [38, 39, 40, 41, 42, 43, 44, 64];
    private $SPA_ROOT_DESTINATIONS = [38, 39, 40, 41, 42, 43, 44, 64];
    private $ISLAND_ROOT_DESTINATIONS = [38, 39, 40, 41, 42, 43, 44, 64];
    private $SAFARI_ROOT_DESTINATIONS = [38, 39, 40, 41, 42, 43, 44, 64];

    public function destinationTree(){
        $rootCategories = Categories::whereIn('id', $this->VOYAGE_ROOT_DESTINATIONS)
        ->orderBy('category_order_num', 'asc')
        ->get()
        ->toArray();

        foreach($rootCategories as $key => $category){
            $rootCategories[$key]['children'] = $this->getCategoryChild($category['id']);
        }

        return $rootCategories;
    }

    private function getCategoryChild($parent_id){
        $categories = Categories::where('parent_category_id', '=', $parent_id)
        ->orderBy('category_order_num', 'asc')
        ->get()
        ->toArray();

        foreach($categories as $key => $category){
            $categories[$key]['children'] = $this->getCategoryChild($category['id']);
        }

        return $categories;
    }

}
