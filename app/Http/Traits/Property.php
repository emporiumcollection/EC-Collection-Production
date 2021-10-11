<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;

use App\Models\PropertyRoomPrices;
use App\Models\PropertyImages;
use App\Models\PropertyRooms;
use App\Models\SeasonDates;
use App\Models\Categories;
use App\Models\properties;
use App\Models\amenities;
use App\Models\Seasons;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Spa;

use DateTime;
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
            'latitude',
            'longitude',
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
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids'
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
        ->limit(4)
        ->get();
    }

    public function getFeaturedProperties($keyword){
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
            'latitude',
            'longitude',
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
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids'
        ])
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
        ->limit(4)
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
            'detail_section1_description_box2', 
            'roomamenities', 
            'assign_amenities', 
            'latitude',
            'longitude',
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
            'carpark',
            'bar_ids',
            'spa_ids',
            'restaurant_ids'
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
        ->limit(4)
        ->get();        
    }

    public function formatPropertyRecords(&$properties){
        $roomamenitieslist = [];
        $all = [];
        foreach($properties as $k => $property){
            $suiteNameList = [];
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
                $suiteNameList = [];
                foreach($property->suites as $sk => $suite){
                    $suiteNameList[] = $suite->cat_short_name;
                    if(!empty($suite->rooms)){
                        foreach($suite->rooms as $rk => $room){
                            $roomImages = PropertyImages::with(['file' => function($query){
                                return $query
                                ->leftJoin('tb_container', 'tb_container_files.folder_id', 
                                    '=', 'tb_container.id')
                                ->select(['tb_container_files.id', 'file_name', 'tb_container.name']);
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
            $properties[$k]->suiteNameList = implode('<br>', $suiteNameList);

            //bars spas and restrurants
            $bars = Bar::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->bar_ids)))
            ->get();

            $pbars = [];
            foreach($bars as $bar){
                $pbars[$bar->id] = $bar->title;
            }
            $properties[$k]->barList = $pbars;

            $spas = Spa::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->spa_ids)))
            ->get();

            $pspas = [];
            foreach($spas as $spa){
                $pspas[$spa->id] = $spa->title;
            }
            $properties[$k]->spaList = $pspas;

            $restaurants = Restaurant::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->restaurant_ids)))
            ->get();

            $prestau = [];
            foreach($restaurants as $res){
                $prestau[$res->id] = $res->title;
            }
            $properties[$k]->restaurantList = $prestau;

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

    public function getPropertyRoomPrices($id, $category_id, $arrival, $departure){
        $seasonDays = [];

        $roomIds = [];
        $rooms = PropertyRooms::where('category_id', '=', $category_id)
        ->get()
        ->toArray();
        foreach($rooms as $room){
            $roomIds[] = $room['id'];
        }

        $journyStart = $arrival;
        $journyEnd = $departure;

        while($journyStart <= $journyEnd){
            // Get season dates
            $seasonDates = SeasonDates::select(['season_id', 'season_from_date', 'season_to_date'])
            ->where('season_from_date', '<=', $journyStart)
            ->where('season_to_date', '>=', $journyStart)
            ->where('property_id', '=', $id)
            ->get()
            ->toArray();

            // Find prices per day mon, tue, wed...
            if(!empty($seasonDates)){
                foreach($seasonDates as $sdate){                    
                    // Get season prices
                    $roomPrices = PropertyRoomPrices::select([
                        'monday_price', 
                        'tuesday_price',
                        'wednesday_price',
                        'thursday_price',
                        'friday_price',
                        'saturday_price',
                        'sunday_price',
                    ])
                    ->whereIn('category_id', $roomIds)
                    ->where('season_id', '=', $sdate['season_id'])
                    ->get()
                    ->toArray();
                    
                    if(empty($roomPrices)){
                        continue;    
                    }

                    $start = $sdate['season_from_date'];
                    $end = $sdate['season_to_date'];

                    while($start <= $end){
                        $dayname = strtolower(date('l', strtotime($start)));

                        $seasonDays[$start] = $roomPrices[0][$dayname.'_price'];

                        $nextDay = new DateTime($start . ' + 1 day');
                        $start = $nextDay->format('Y-m-d');
                    }
                }
            }


            $nextDay = new DateTime($journyStart . ' + 1 day');
            $journyStart = $nextDay->format('Y-m-d');
        }

        return $seasonDays;
    }

    private function getStartAndEndDate($week, $year) {
        $dto = new DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('Y-m-d');
        $dto->modify('+6 days');
        $ret['week_end'] = $dto->format('Y-m-d');
        return $ret;
    }

}
