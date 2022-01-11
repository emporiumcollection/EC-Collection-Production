<?php // ./app/Traits/Datatable.php

namespace App\Http\Traits;
use Illuminate\Http\Request;

use App\Models\PropertyRoomPrices;
use App\Models\PropertyImages;
use App\Models\PropertyRooms;
use App\Models\availableservices;
use App\Models\ImageResSpaBar;
use App\Models\SeasonDates;
use App\Models\Categories;
use App\Models\properties;
use App\Models\amenities;
use App\Models\Seasons;
use App\Models\Container;
use App\Models\Restaurant;
use App\Models\Bar;
use App\Models\Spa;

use DateTime;
use DB;
use Cache;
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

    public function getEditorChoiceProperties($cities, $keyword){
        $destinationId = 0;
        $destination = categories::select(['id'])
        ->where('category_name', '=', $keyword)
        ->get()
        ->toArray();
        
        if(!empty($destination)){
            $destinationId = $destination[0]['id'];
        }

        return properties::orderByRaw("RAND()")->select([
            'id', 
            'property_name', 
            'property_short_name',
            'property_slug', 
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
            'restaurant_ids',
            'city',
            'property_usp',
            'covid_info',
            'covid_link',
            'youtube_channel'
            ])
        ->with([
            'boards',
            'container',
            'suites' => function($query){
                return $query->with(['rooms', 'amenities'])->where('show_on_booking', '=', 1);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->whereRaw(" (country = '$keyword' or city = '$keyword'  or property_category_id = '$destinationId' or property_category_id like '%,$destinationId' or property_category_id like '$destinationId,%' ) ")
        //->where('country', '=', $keyword)
        ->where('editor_choice_property', '=', 1)
        ->where('property_status', '=', 1)
        ->limit(2)
        ->get();

    }

    public function getFeaturedProperties($cities,$keyword){
        $destinationId = 0;
        $destination = categories::select(['id'])
        ->where('category_name', '=', $keyword)
        ->get()
        ->toArray();
        if(!empty($destination)){
            $destinationId = $destination[0]['id'];
        }

        return properties::orderByRaw("RAND()")->select([
            'id', 
            'property_name', 
            'property_short_name',
            'property_slug', 
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
            'restaurant_ids',
            'city',
            'property_usp',
            'covid_info',
            'covid_link',
            'youtube_channel'
        ])
        ->with([
            'boards',
            'container',
            //'images',
            'suites' => function($query){
                return $query->with(['rooms', 'amenities'])->where('show_on_booking', '=', 1);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->whereRaw(" (country = '$keyword' or city = '$keyword'  or property_category_id = '$destinationId' or property_category_id like '%,$destinationId' or property_category_id like '$destinationId,%' ) ")
        //->where('country', '=', $keyword)
        ->where('feature_property', '=', 1)
        ->where('property_status', '=', 1)
        ->limit(2)
        ->get();
    }

    public function searchPropertiesByKeyword($cities, $keyword){
        $key = md5($keyword.request()->get('experience').
        request()->get('facility_ids').
        request()->get('atmosphere_ids').
        request()->get('style_ids'));
        $destinationId = 0;

        return Cache::get($key, function () {
            $destinationId = 0;
            $keyword = request()->get('s');

            $destination = categories::select(['id'])
            ->where('category_name', '=', $keyword)
            ->get()
            ->toArray();
            if(!empty($destination)){
                $destinationId = $destination[0]['id'];
            }


            //Query starts
            $experience_id = false;
            if(request()->get('experience')){
                $experience = categories::select(['id'])
                ->where('category_alias', '=', request()->get('experience'))
                ->get()
                ->toArray();

                $experience_id = $experience[0]['id'];
            }

            $properties = properties::select([
                'id', 
                'property_name', 
                'property_short_name',
                'property_slug', 
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
                'restaurant_ids',
                'city',
                'property_usp',
                'covid_info',
                'covid_link',
                'youtube_channel'
            ])
            ->with([
                'boards',
                'container',
                //'images',
                'PropertyCategoryPackages' => function($query){
                    $query->with(['package']);
                },
                'suites' => function($query){
                    return $query->with(['rooms', 'amenities'])->where('show_on_booking', '=', 1);
                },
                'propertyImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }, 
                'roomImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }, 
                'hotelBrochureImages' => function($query){
                    return $query->with(['file' => function($query){
                        return $query->select(['id','file_name']);

                    }]);
                    //->limit(20);
                }
            ])
            //->whereIn('city', $cities)
            ->whereRaw(" (country = '$keyword' or city = '$keyword' or property_category_id = '$destinationId' or property_category_id like '%,$destinationId' or property_category_id like '$destinationId,%') ")
            //->where('country', '=', $keyword)
            //->where('latitude', '!=', '')
            //->where('longitude', '!=', '')
            ->where('feature_property', '!=', '1')
            ->where('editor_choice_property', '!=', '1')
            ->where('property_status', '=', 1);

            if(request()->get('atmosphere_ids')){            
                $atmosphere_ids = explode(",",request()->get('atmosphere_ids'));
                $aWhere = [];
                foreach($atmosphere_ids as $id){
                    $aWhere[] = "atmosphere_ids = '$id' or atmosphere_ids like '%,$id' or atmosphere_ids like '$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if(request()->get('facility_ids')){
                $facility_ids = explode(",",request()->get('facility_ids'));
                $aWhere = [];
                foreach($facility_ids as $id){
                    $aWhere[] = "facility_ids = '$id' or facility_ids like '%,$id' or facility_ids like '$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if(request()->get('style_ids')){
                $style_ids = explode(",",request()->get('style_ids'));
                $aWhere = [];
                foreach($style_ids as $id){
                    $aWhere[] = "style_ids = '$id' or style_ids like '%,$id' or style_ids like '$id,%' ";
                }    
                $properties->whereRaw(' ('.implode(' OR ', $aWhere) . ') ');
            }

            if($experience_id){
                $properties->whereRaw("(property_category_id = '$experience_id' or property_category_id like '%,$experience_id' or property_category_id like '$experience_id,%')");
            }   

            return $properties
            //->limit(6)
            ->get();
        });            
    }

    public function getPropertyByslug($slug){
        $property = properties::select([
            'id', 
            'property_name', 
            'property_short_name',
            'property_slug', 
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
            'restaurant_ids',
            'city',
            'property_usp',
            'covid_info',
            'covid_link',
            'youtube_channel'
        ])
        ->with([
            'boards',
            'container',
            //'images',
            'PropertyCategoryPackages' => function($query){
                $query->with(['package']);
            },
            'suites' => function($query){
                return $query->with(['rooms', 'amenities'])->where('show_on_booking', '=', 1);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->where('property_slug','=', $slug);

        return $property->get();
    }

    public function getPropertyById($id){
        $property = properties::select([
            'id', 
            'property_name', 
            'property_short_name',
            'property_slug', 
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
            'restaurant_ids',
            'city',
            'property_usp',
            'covid_info',
            'covid_link',
            'youtube_channel'
        ])
        ->with([
            'boards',
            'container',
            //'images',
            'PropertyCategoryPackages' => function($query){
                $query->with(['package']);
            },
            'suites' => function($query){
                return $query->with(['rooms', 'amenities'])->where('show_on_booking', '=', 1);
            },
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'roomImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }, 
            'hotelBrochureImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            }
        ])
        ->where('id', '=', $id);

        return $property->get();
    }

    private function filterByprice($max,$min,&$propertyResults){
        foreach ($propertyResults as $k => $property) {
            if($property->price >= $min && $property->price <= $max ){
                
            }else{  
                unset($propertyResults[$k]);
            }
        }
    }


    public function formatPropertyRecords(&$properties){
        $roomamenitieslist = [];
        $all = [];
        foreach($properties as $k => $property){
            $suiteNameList = [];
            $properties[$k]->price = $this->getPropertyPrice($property->id);
            $properties[$k]->roomamenities = $this->formatRoomAmenities($property->roomamenities);
            $properties[$k]->assign_amenities = $this->formatRoomAmenities($property->assign_amenities);
            $properties[$k]->availableservices = $this->formatAvailableServices($property->availableservices);

            // room images
            if(!empty($property->suites)){
                $suiteNameList = [];
                foreach($property->suites as $sk => $suite){
/*                    if(!$suite->status){
                        unset($property->suites[$sk]);
                        continue;
                    }
*/                    
                    $property->suites[$sk]->price = $this->getSuitePrice($suite->id);
                    $suiteNameList[] = '<a href="/hotel/suite/'.$suite->property_id.'/#'.$suite->id.'">'.ucwords($suite->cat_short_name).'</a>';
                    if(!empty($suite->rooms->toArray())){
                        foreach($suite->rooms as $rk => $room){
                            //$properties[$k]->suites[$sk]->rooms[$rk]->price = $this->getRoomPrice($room->id);

                            if(!isset($properties[$k]->suites[$sk]->rooms[$rk]->images)){
                                $properties[$k]->suites[$sk]->rooms[$rk]->images = $this->getRoomImages($room->property_id, $room->category_id);
                            }
                            break;
                        }

                        //$properties[$k]->suites[$sk]->rooms[0]->images = $this->getRoomImages($property->id, $suite->id);

                        foreach($suite->amenities as $ak => $amenity){
                            $suiteamenities = amenities::whereIn('id', explode(',', $amenity->amenity_ids))
                            ->get()->toArray();
                            $properties[$k]->suites[$sk]->suiteamenities = $this->formatRoomAmenities($amenity->amenity_ids, 'li');
                        }
                    }else{
                        $properties[$k]->suites[$sk]->rooms[0] = [
                            'id' => 0,
                            'images' => [
                                'id' => 0,
                                'file_name' => 'default-image.png',
                                'name' => 'room-1',
                            ]
                        ];
                    }
                }
            }
            $properties[$k]->suiteNameList = implode('<br>', $suiteNameList);

            //bars spas and restrurants
            $bars = Bar::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->bar_ids)))
            ->get();

            $pbars = [];
            foreach($bars as $bar){
                $pbars[$bar->id]['title'] = $bar->title;
                $pbars[$bar->id]['gallery'] = $this->getResSpaBarGallery($bar->id, 'bar');
            }
            $properties[$k]->barList = $pbars;

            $spas = Spa::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->spa_ids)))
            ->get();

            $pspas = [];
            foreach($spas as $spa){
                $pspas[$spa->id]['title'] = $spa->title;
                $pspas[$spa->id]['gallery'] = $this->getResSpaBarGallery($spa->id, 'spa');
            }
            $properties[$k]->spaList = $pspas;

            $restaurants = Restaurant::whereIn('id', explode(',', str_replace(' ', '', $properties[$k]->restaurant_ids)))
            ->get();

            $prestau = [];
            foreach($restaurants as $res){
                $prestau[$res->id]['title'] = $res->title;
                $prestau[$res->id]['gallery'] = $this->getResSpaBarGallery($res->id, 'res');
            }
            $properties[$k]->restaurantList = $prestau;

        }
    }

    private function getResSpaBarGallery($id, $type){
        $gallery = [];
        $containerId = ImageResSpaBar::select(['folder_id'])
            ->where('parent_id', '=', $id)
            ->where('type', '=', $type)
            ->get()
            ->toArray();

        if(!empty($containerId)){
            $containerId = $containerId[0]['folder_id'];
            $containerName = Container::select(['name'])
                ->where('id', '=', $containerId)
                ->get()
                ->toArray();
            $containerName = $containerName[0]['name'];

            $galleryId = Container::where('parent_id', '=', $containerId)
                ->where('name', '=', 'gallery')
                ->get()
                ->toArray();
            if(!empty($galleryId)){
                $gallery = Container::select(['id', 'name'])
                    ->where('id', '=', $galleryId[0]['id'])
                    ->with(['files'])
                    ->get()
                    ->toArray();
                if(!empty($gallery)){
                    $gallery = $gallery[0];
                    $gallery['container'] = $containerName;
                }
            }
        }

        return $gallery;
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
                  if(isset($property['container']['name'])){
                    $container_name = $property['container']['name'];
                  }else{
                    $container_name = strtolower(str_replace("-", " ", trim($property->property_name)));
                  }

                  if(is_array($image)){
                    $file_name = $image['file_name'];
                  }elseif(is_object($image) && isset($image->file->file_name)){
                    $file_name = $image->file->file_name;
                  }else{
                    $file_name = 'default-image.png';
                  }

                $images[] = 'uploads/container_user_files/locations/'.$container_name.'/property-images/'.$file_name;
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

    public function setGalleryAndFormat(&$properties){
        /*$emptyPropertyImages = json_encode([
            'id' => 0,
            'file_name' => 'default-image.png',
        ]);*/

        if(!empty($properties->toArray())){
            foreach($properties as $k => $editorProperty){
                if(empty($editorProperty->container)){
                    $dname = explode(',', $editorProperty->property_name)[0];

                    $container = Container::
                    where('display_name', '=', $dname)
                    ->get();

                    if(!empty($container->toArray())){
                        $editorProperty->container = $container[0];
                        $properties[$k]->container = $container[0];
                    }
                }
                if(isset($editorProperty->container) && $editorProperty->container){
                    $properties[$k]->propertyImages = $editorProperty->container->PropertyImages($editorProperty->container->id);   
                }
                /*else{
                    $properties[$k]->propertyImages[0] = json_decode($emptyPropertyImages);
                }*/
            }
            
            $this->formatPropertyRecords($properties);
        }
    }

    public function seperatedByPackage($results){
        $lifestyle = [];
        $dedicated = [];
        $bespoke = [];
        foreach($results as $property){
            $record = $property->toArray();
            if(!isset($record['property_category_packages']['package_id'])) continue;
            if($record['property_category_packages']['package_id'] == config('app.lifestyle_package_id')){
                $lifestyle[] = $property;
            }elseif($record['property_category_packages']['package_id'] == config('app.dedicated_package_id')){
                $dedicated[] = $property;
            }elseif($record['property_category_packages']['package_id'] == config('app.bespoke_package_id')){
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

            $seasons = Seasons::where('property_id',$id)->get();

            $season_ids = [];
            foreach($seasons as $season){
                $season_ids[] = $season->id;
            }
            
            $seasonDates = SeasonDates::select(['season_id', 'season_from_date', 'season_to_date'])
            ->where('season_from_date', '<=', $journyStart)
            ->where('season_to_date', '>=', $journyStart)
            ->whereIn('season_id',$season_ids)
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
                    //->whereIn('category_id', $roomIds) for amadeus
                    ->where('category_id', '=', $category_id)
                    ->where('season_id', '=', $sdate['season_id'])
                    ->get()
                    ->toArray();  

                    if(empty($roomPrices)){
                        $roomPrices = PropertyRoomPrices::select([
                            'monday_price', 
                            'tuesday_price',
                            'wednesday_price',
                            'thursday_price',
                            'friday_price',
                            'saturday_price',
                            'sunday_price',
                        ])
                        //->whereIn('category_id', $roomIds) for amadeus
                        ->where('category_id', '=', $category_id)
                        ->where('season_id', '=', 0)
                        ->get()
                        ->toArray();
                          
                        if(empty($roomPrices)){ 
                            continue;
                        }
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

    public function getLoaderImages($location){
        $locationSlug = strtolower(str_replace(' ', '-', $location));
        $loaderImages = Container::where('parent_id', '=', 10294)
        ->whereRaw("(display_name like '%".$location."%' or display_name like '%".$locationSlug."%')")
        ->with(['files'])
        ->get()
        ->toArray();

        return $loaderImages;
    }

    public function getPropertyPrice($id){
        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        ->where('property_id', '=', $id)
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }
    }

    public function formatRoomAmenities($commaSeperated, $format = null){        
        // room and assign amenitiess
        $roomamenities = amenities::whereIn('id', explode(',', $commaSeperated))
        ->get()->toArray();
        if(!empty($roomamenities)){
            foreach($roomamenities as $amenity){
                $roomamenitieslist[] = $amenity['amenity_title'];
            }
        }
        if(!empty($roomamenitieslist)){
            if($format == 'li'){
                return '<li>'.implode('</li><li>', $roomamenitieslist).'</li>';
            }
            return implode(',', $roomamenitieslist);
        }else{
            return '';
        }
    }

    public function formatAvailableServices($commaSeperated){
        $all = [];
        $allservices = availableservices::whereIn('id', explode(',', $commaSeperated))
        ->get()->toArray();
        
        if(!empty($allservices)){
            foreach($allservices as $service){
                $all[] = $service['title'];
            }
        }
        if(!empty($all)){
            return implode('<br/>', $all);
        }else{
            return '';
        }
    }

    public function getSuitePrice($suite_id){
        $seasonDays = [];

        $roomIds = [];
        $rooms = PropertyRooms::where('category_id', '=', $suite_id)
        ->get()
        ->toArray();
        foreach($rooms as $room){
            $roomIds[] = $room['id'];
        }

        if(empty($roomIds)) return 0;

        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        //->whereIn('category_id', $roomIds) for amadeus
        ->where('category_id', '=', $suite_id)        
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }

    }

    public function getRoomPrice($room_id){
        $price = PropertyRoomPrices::first()
        ->select(['rack_rate'])
        ->where('category_id', '=', $room_id)
        ->orderBy('rack_rate', 'asc')
        ->get()
        ->toArray();

        if(!empty($price)){
            return number_format($price[0]['rack_rate'],2);
        }else{
            return 0;
        }

    }

    public function getRoomImages($property_id, $room_id){
        $roomImages = PropertyImages::with(['file' => function($query){
            return $query
            ->leftJoin('tb_container', 'tb_container_files.folder_id', 
                '=', 'tb_container.id')
            ->select(['tb_container_files.id', 'file_name', 'tb_container.name'])
            ->orderBy('file_sort_num', 'asc');
        }])
        ->where('property_id', '=', $property_id)
        ->where('category_id', '=', $room_id)
        ->get()
        ->toArray();

        return $roomImages;
    }

    public function getCities($keyword, &$cities){
        $locations = Categories::select(['id', 'category_name'])
        ->where('category_name', 'like', "%$keyword%")
        ->get()
        ->toArray();

        if(empty($locations)){
            $cities[] = $keyword;
        }else{
            foreach($locations as $location){
                $childs = Categories::where('parent_category_id', '=', $location['id'])
                ->get()
                ->toArray();
                foreach($childs as $child){
                    $cities[] = $child['category_name'];
                    $this->getCities($child['category_name'], $cities);
                }
            }
        }   
    }

    public function storeSession($request){
        $rooms = $request->input('rooms');
        $adult = $request->input('adult');
        $child = $request->input('child');

        $selected_suite = [];
        $total_adults = 0;
        $total_childs = 0;
        $total_suite = 0;
        foreach($rooms as $key => $room_num){
            if($adult[$key] || $child[$key]){
                $total_suite++;

                $selected_suite[$key] = [ 
                    'adult' => $adult[$key],
                    'child' => $child[$key],
                ];
                $total_adults = $total_adults + $adult[$key];
                $total_childs = $total_childs + $child[$key];
            }
        }
        
        \session()->put('suites', $selected_suite);
        \session()->put('total_suite', $total_suite);
        \session()->put('adult', $total_adults);
        \session()->put('children', $total_childs);
        \session()->put('Guests', $total_adults + $total_childs);

        if(isset($request->destination)){
            \session()->put('keyword', $request->destination);
        }

        if(isset($request->arrive)){
            \session()->put('arrival', $request->arrive);
            \session()->put('arrival_date', strtotime($request->arrive));
        }

        if(isset($request->departure)){
            \session()->put('departure', $request->departure);
            \session()->put('departure_date', strtotime($request->departure));
        }

        \session()->save();
    }

     public function setFitlerOptions(){
        $this->data['experiences_data'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', 8)
        ->get();

        $this->data['atmosphere'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', config('app.atmosphere_category_id'))
        ->get();

        $this->data['facilities'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', config('app.facilities_category_id'))
        ->get();

        $this->data['style'] = \DB::table('tb_categories')
        ->where('category_approved', 1)
        ->where('category_published', 1)
        ->where('parent_category_id', config('app.style_category_id'))
        ->get();

        return $this->data;
    }

    public function getFilterParameter(){

        if(request()->get('atmosphere_ids')){
            $atmospheres_ids = explode(",",request()->get('atmosphere_ids'));
            $atmosphere_ = [];
            foreach($atmospheres_ids as $atm_ids){
                $atmosphere_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id', $atm_ids)
                    ->get();        
            }
            $this->data['atmosphere_data'] = $atmosphere_;
            // echo "<pre>";print_r($this->data['atmosphere_data']);exit;
        }

        if(request()->get('facility_ids')){
            $facility_ids = explode(",",request()->get('facility_ids'));
            $facility_ = [];
            foreach($facility_ids as $fac_id){
                $facility_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id', $fac_id)
                    ->get();        
            }
            $this->data['facility_data'] = $facility_;
        }

        if(request()->get('style_ids')){
            $style_ids = explode(",",request()->get('style_ids'));
            $style_ = [];
            foreach($style_ids as $sty_id){
                $style_[] = \DB::table('tb_categories')
                    ->where('category_approved', 1)
                    ->where('category_published', 1)
                    ->where('id',$sty_id)
                    ->get();        
            }

            $this->data['selected_style'] = $style_;
        }
        return $this->data;
    }

    public function PropertiGet($id){
        $properties = properties::select([
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
            'container',
            'propertyImages' => function($query){
                return $query->with(['file' => function($query){
                    return $query->select(['id','file_name']);

                }]);
                //->limit(20);
            },
        ])
        ->where('id', '=', $id)
        ->get();

        $this->formatPropertyRecords($properties);

        return $properties;
    }

    public function getLocationInfoRoadGoat($keyword){
        $properties = \DB::table('tb_categories')->where('category_name', '=', $keyword)->get();
        
        if($properties[0]->location_info == ''){

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.roadgoat.com/api/v2/destinations/auto_complete?q=' . urlencode($keyword),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Basic ZTIzMzNlZTgyNzUyZTA5MWZkZGVmODFkMWZkOGNlMDg6ZTZmN2NiYWI0NmQ2ZTk2ZjEyOTgwZWU5MDBlYmZmYWQ='
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $response_att = json_decode($response);
            if(!empty($response_att)){   
                $json = $response_att->data[0]->attributes;
                $json_att = json_encode($json);
                DB::table('tb_categories')->where('category_name', $keyword)->update(['location_info' => $json_att]);
            }else{
                $json_att = [];
            }
            return $json_att;         
        }
        else{
            return $properties[0]->location_info;
        }
        exit;
    }
}
