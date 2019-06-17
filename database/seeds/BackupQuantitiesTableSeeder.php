<?php

use Illuminate\Database\Seeder;

class BackupQuantitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quantities')->delete();
        
        \DB::table('quantities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'quantity' => '2',
                'item_id' => 1,
                'color_id' => 1,
                'size_id' => 2,
                'created_at' => '2019-06-14 10:09:22',
                'updated_at' => '2019-06-14 10:09:22',
            ),
            1 => 
            array (
                'id' => 2,
                'quantity' => '56',
                'item_id' => 1,
                'color_id' => 2,
                'size_id' => 2,
                'created_at' => '2019-06-14 10:11:34',
                'updated_at' => '2019-06-14 10:11:34',
            ),
        ));
        
        
    }
}