<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Requests;
use App\Models\properties;
use App\Models\Categories;
use App\Models\Container;
use App\Helpers\CommonHelper;
use DB, Auth;

class CreateCategoryFolders extends Command
{
    protected $signature = 'create-category-folders';

    protected $description = 'Creates the remaining category folders under Emotional Gallery Loader';

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
        $new_container_ids = [];
        $categories = Categories::all();
        foreach($categories as $key => $category){
            if($category->category_alias != ''){
                $container = Container::where('name', '=', trim($category->category_alias))
                    ->get()
                    ->toArray();
                if(empty($container)){
                    $data = [
                        'user_id' => 1,
                        'category_name' => trim($category->category_name),
                        'slug' => trim($category->category_alias),
                        'category_description' => trim($category->category_description)
                    ];
                    $new_container_ids[] = CommonHelper::insertContainer($data);
                }
            }
        }
        if(!empty($new_container_ids)){
            echo 'New Inserted Containers IDs: ' . implode(',', $new_container_ids) . PHP_EOL;
        }
        echo 'Operation completed.';
    }
}
