<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\Categories;
use App\Models\properties;
use App\Models\amenities;

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

    public function getEditorChoiceProperties($keyword){
        return properties::with([
            'container',
            'suites', 
            'roomImages' => function($query){
                return $query->with(['file']);
            }, 
            'barImages' => function($query){
                return $query->with(['file']);
            }, 
            'spaImages' => function($query){
                return $query->with(['file']);
            }, 
            'restrurantImages' => function($query){
                return $query->with(['file']);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file']);
            }])
        ->where('city', '=', $keyword)
        ->where('editor_choice_property', '=', 1)
        ->get();
    }

    public function getFeaturedProperties($keyword){
        return properties::with([
            'images',
            'suites',
            'roomImages' => function($query){
                return $query->with(['file']);
            }, 
            'barImages' => function($query){
                return $query->with(['file']);
            }, 
            'spaImages' => function($query){
                return $query->with(['file']);
            }, 
            'restrurantImages' => function($query){
                return $query->with(['file']);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file']);
            }
        ])
        ->where('city', '=', $keyword)
        ->where('feature_property', '=', 1)
        ->get();        
    }

    public function formatPropertyRecords(&$properties){
        $room = [];
        $all = [];
        foreach($properties as $k => $property){
            $roomamenities = amenities::whereIn('id', explode(',', $property->roomamenities))
            ->get()->toArray();
            if(!empty($roomamenities)){
                foreach($roomamenities as $amenity){
                    $room[] = $amenity['amenity_title'];
                }
            }
            $properties[$k]->roomamenities = implode(',', $room);

            $allamenities = amenities::whereIn('id', explode(',', $property->assign_amenities))
            ->get()->toArray();
            if(!empty($allamenities)){
                foreach($allamenities as $amenity){
                    $all[] = $amenity['amenity_title'];
                }
            }
            $properties[$k]->assign_amenities = implode(',', $all);
        }
    }

}
