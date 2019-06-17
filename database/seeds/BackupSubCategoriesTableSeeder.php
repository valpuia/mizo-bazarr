<?php

use Illuminate\Database\Seeder;

class BackupSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bag',
                'categories_id' => 1,
                'created_at' => '2019-06-14 10:03:19',
                'updated_at' => '2019-06-14 10:03:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kawr',
                'categories_id' => 1,
                'created_at' => '2019-06-14 15:13:13',
                'updated_at' => '2019-06-14 15:13:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kekawr',
                'categories_id' => 1,
                'created_at' => '2019-06-14 15:13:24',
                'updated_at' => '2019-06-14 15:13:24',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pheikhawk',
                'categories_id' => 1,
                'created_at' => '2019-06-14 15:13:32',
                'updated_at' => '2019-06-14 15:13:32',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Plate',
                'categories_id' => 2,
                'created_at' => '2019-06-14 15:13:49',
                'updated_at' => '2019-06-14 15:13:49',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Phone',
                'categories_id' => 3,
                'created_at' => '2019-06-14 15:13:59',
                'updated_at' => '2019-06-14 15:13:59',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Laptop',
                'categories_id' => 3,
                'created_at' => '2019-06-14 15:14:08',
                'updated_at' => '2019-06-14 15:14:08',
            ),
        ));
        
        
    }
}