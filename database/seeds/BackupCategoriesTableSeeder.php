<?php

use Illuminate\Database\Seeder;

class BackupCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Fashion',
                'created_at' => '2019-06-14 10:03:04',
                'updated_at' => '2019-06-14 10:03:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Household',
                'created_at' => '2019-06-14 15:12:43',
                'updated_at' => '2019-06-14 15:12:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Electronics',
                'created_at' => '2019-06-14 15:12:53',
                'updated_at' => '2019-06-14 15:12:53',
            ),
        ));
        
        
    }
}