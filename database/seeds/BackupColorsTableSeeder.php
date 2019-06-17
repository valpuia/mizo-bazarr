<?php

use Illuminate\Database\Seeder;

class BackupColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('colors')->delete();
        
        \DB::table('colors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Red',
                'rgb' => 'ff0000',
                'created_at' => '2019-06-14 10:03:52',
                'updated_at' => '2019-06-14 10:03:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Green',
                'rgb' => '00ff00',
                'created_at' => '2019-06-14 10:04:12',
                'updated_at' => '2019-06-14 10:04:12',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Blue',
                'rgb' => '0000ff',
                'created_at' => '2019-06-14 10:04:28',
                'updated_at' => '2019-06-14 10:04:28',
            ),
        ));
        
        
    }
}