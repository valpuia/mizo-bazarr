<?php

use Illuminate\Database\Seeder;

class BackupPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-06-14 09:50:11',
                'updated_at' => '2019-06-14 09:50:11',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-14 09:50:45',
                'updated_at' => '2019-06-14 09:50:45',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:08',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:08',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:08',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:08',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_sub_categories',
                'table_name' => 'sub_categories',
                'created_at' => '2019-06-14 09:51:08',
                'updated_at' => '2019-06-14 09:51:08',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_types',
                'table_name' => 'types',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:52:35',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_types',
                'table_name' => 'types',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:52:35',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_types',
                'table_name' => 'types',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:52:35',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_types',
                'table_name' => 'types',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:52:35',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_types',
                'table_name' => 'types',
                'created_at' => '2019-06-14 09:52:35',
                'updated_at' => '2019-06-14 09:52:35',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_colors',
                'table_name' => 'colors',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 09:53:32',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_colors',
                'table_name' => 'colors',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 09:53:32',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_colors',
                'table_name' => 'colors',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 09:53:32',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_colors',
                'table_name' => 'colors',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 09:53:32',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_colors',
                'table_name' => 'colors',
                'created_at' => '2019-06-14 09:53:32',
                'updated_at' => '2019-06-14 09:53:32',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_sizes',
                'table_name' => 'sizes',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_sizes',
                'table_name' => 'sizes',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_sizes',
                'table_name' => 'sizes',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_sizes',
                'table_name' => 'sizes',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_sizes',
                'table_name' => 'sizes',
                'created_at' => '2019-06-14 09:54:24',
                'updated_at' => '2019-06-14 09:54:24',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_quantities',
                'table_name' => 'quantities',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_quantities',
                'table_name' => 'quantities',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_quantities',
                'table_name' => 'quantities',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_quantities',
                'table_name' => 'quantities',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_quantities',
                'table_name' => 'quantities',
                'created_at' => '2019-06-14 09:55:07',
                'updated_at' => '2019-06-14 09:55:07',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_items',
                'table_name' => 'items',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-14 09:58:19',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_items',
                'table_name' => 'items',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-14 09:58:19',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_items',
                'table_name' => 'items',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-14 09:58:19',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_items',
                'table_name' => 'items',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-14 09:58:19',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_items',
                'table_name' => 'items',
                'created_at' => '2019-06-14 09:58:19',
                'updated_at' => '2019-06-14 09:58:19',
            ),
        ));
        
        
    }
}