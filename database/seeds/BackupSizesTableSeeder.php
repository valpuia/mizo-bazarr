<?php

use Illuminate\Database\Seeder;

class BackupSizesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sizes')->delete();
        
        \DB::table('sizes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'size' => '7 UK',
                'created_at' => '2019-06-14 10:04:46',
                'updated_at' => '2019-06-14 10:04:46',
            ),
            1 => 
            array (
                'id' => 2,
                'size' => '53 cm',
                'created_at' => '2019-06-14 10:05:01',
                'updated_at' => '2019-06-14 10:05:01',
            ),
        ));
        
        
    }
}