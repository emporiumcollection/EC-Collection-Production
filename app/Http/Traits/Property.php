<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\Categories;
use App\Models\properties;
use App\Models\amenities;
use App\Models\PropertyImages;

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

    public function getEditorChoiceProperties($keyword){
        return properties::select([
            'id', 
            'property_name', 
            'property_short_name', 
            'detail_section1_title', 
            'detail_section1_description_box1', 
            'detail_section1_description_box2', 
            'detail_section1_description_box2', 
            'roomamenities', 
            'assign_amenities', 
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
            'carpark'
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

                }])->limit(20);
            }, 
            'barImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'spaImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'restrurantImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }])
        ->where('city', '=', $keyword)
        ->where('editor_choice_property', '=', 1)
        ->limit(1)
        ->get();
    }

    public function getFeaturedProperties($keyword){
        return properties::select(['id', 'property_name', 'property_short_name', 'detail_section1_title', 'detail_section1_description_box1', 'detail_section1_description_box2'])
        ->with([
            'boards',
            'container',
            'images',
            'suites' => function($query){
                return $query->with(['rooms', 'amenities']);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'barImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'spaImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'restrurantImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }
        ])
        ->where('city', '=', $keyword)
        ->where('feature_property', '=', 1)
        ->limit(1)
        ->get();        
    }

    public function searchPropertiesByKeyword($keyword){
        return properties::select([
            'id', 
            'property_name', 
            'property_short_name', 
            'detail_section1_title', 
            'detail_section1_description_box1', 
            'detail_section1_description_box2',
            'latitude',
            'longitude',
            'address', 
        ])
        ->with([
            'boards',
            'container',
            'images',
            'PropertyCategoryPackages' => function($query){
                $query->with(['package']);
            },
            'suites' => function($query){
                return $query->with(['rooms', 'amenities']);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'barImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'spaImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'restrurantImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }])->limit(20);
            }
        ])
        ->where('city', '=', $keyword)
        ->where('latitude', '!=', '')
        ->where('longitude', '!=', '')
        ->limit(1)
        ->get();        
    }

    public function formatPropertyRecords(&$properties){
        $roomamenitieslist = [];
        $all = [];
        foreach($properties as $k => $property){
            // room and assign amenitiess
            $roomamenities = amenities::whereIn('id', explode(',', $property->roomamenities))
            ->get()->toArray();
            if(!empty($roomamenities)){
                foreach($roomamenities as $amenity){
                    $roomamenitieslist[] = $amenity['amenity_title'];
                }
            }
            if(!empty($roomamenitieslist)){
                $properties[$k]->roomamenities = implode(',', $roomamenitieslist);
            }else{
                $properties[$k]->roomamenities = '';
            }

            $allamenities = amenities::whereIn('id', explode(',', $property->assign_amenities))
            ->get()->toArray();
            if(!empty($allamenities)){
                foreach($allamenities as $amenity){
                    $all[] = $amenity['amenity_title'];
                }
            }
            if(!empty($all)){
                $properties[$k]->assign_amenities = implode(',', $all);
            }else{
                $properties[$k]->assign_amenities = '';
            }

            // room images
            if(!empty($property->suites)){
                foreach($property->suites as $sk => $suite){
                    if(!empty($suite->rooms)){
                        foreach($suite->rooms as $rk => $room){
                            $roomImages = PropertyImages::with(['file' => function($query){
                                $query->select(['id', 'file_name']);
                            }])
                            ->where('property_id', '=', $room->property_id)
                            ->where('category_id', '=', $room->category_id)
                            ->get()
                            ->toArray();

                            $properties[$k]->suites[$sk]->rooms[$rk]->images = $roomImages;
                            break;
                        }
                        foreach($suite->amenities as $ak => $amenity){
                            $suiteamenities = amenities::whereIn('id', explode(',', $amenity->amenity_ids))
                            ->get()->toArray();
                            $suiteamenitlist = [];
                            if(!empty($suiteamenities)){
                                foreach($suiteamenities as $amn){
                                    $suiteamenitlist[] = $amn['amenity_title'];
                                }
                            }
                            if(!empty($suiteamenitlist)){
                                $properties[$k]->suites[$sk]->suiteamenities = '<li>'.implode('</li><li>', $suiteamenitlist).'</li>';
                            }else{
                                $properties[$k]->suites[$sk]->suiteamenities = '';
                            }
                        }
                    }
                }
            }
        }
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
                $images[] = 'uploads/container_user_files/locations/'.$property['container']['name'].'/property-images/'.$image['file_name'];
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

}
