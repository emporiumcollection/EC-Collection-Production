<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\Categories;

trait Property {
    
    public function getLocationDescription($keyword){
        $location = Categories::select(['id', 
            'parent_category_id', 
            'category_name', 
            'category_description'])
        ->where('category_name', '=', $keyword)
        ->get()
        ->toArray();

        return $location[0]['category_description'];
    }

    public function getLocationPath($keyword){
        $path = [];
        
        $category = Categories::select(['id', 'parent_category_id', 'category_name'])
        ->where('category_name', '=', $keyword)
        ->get()
        ->toArray();

        $path[$category[0]['id']] = $category[0]['category_name'];

        while($category[0]['parent_category_id']!=0){
            $category = $this->getParentCategory($category[0]['parent_category_id']);
            $catId = $category[0]['id'];
            $parentId = $category[0]['parent_category_id'];
            
            $path[$catId] = $category[0]['category_name'];
        }

        arsort($path);
        return $path;

    }

    private function getParentCategory($parent_id){
        $parent = Categories::select(['id', 'parent_category_id', 'category_name'])
        ->where('id', '=', $parent_id)
        ->get()
        ->toArray();

        return $parent;
    }

}
