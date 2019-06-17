<?php

use Illuminate\Database\Seeder;

class BackupDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-15 01:43:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'sub_categories',
                'slug' => 'sub-categories',
                'display_name_singular' => 'Sub Category',
                'display_name_plural' => 'Sub Categories',
                'icon' => 'voyager-archive',
                'model_name' => 'App\\SubCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'types',
                'slug' => 'types',
                'display_name_singular' => 'Type',
                'display_name_plural' => 'Types',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Type',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:53:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'colors',
                'slug' => 'colors',
                'display_name_singular' => 'Color',
                'display_name_plural' => 'Colors',
                'icon' => 'voyager-paint-bucket',
                'model_name' => 'App\\Color',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 10:00:32',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'sizes',
                'slug' => 'sizes',
                'display_name_singular' => 'Size',
                'display_name_plural' => 'Sizes',
                'icon' => 'voyager-paperclip',
                'model_name' => 'App\\Size',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'quantities',
                'slug' => 'quantities',
                'display_name_singular' => 'Quantity',
                'display_name_plural' => 'Quantities',
                'icon' => 'voyager-barbell',
                'model_name' => 'App\\Quantity',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'items',
                'slug' => 'items',
                'display_name_singular' => 'Item',
                'display_name_plural' => 'Items',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Item',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":"name","scope":null}',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-15 01:42:29',
            ),
        ));
        
        
    }
}