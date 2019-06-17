<?php

use Illuminate\Database\Seeder;

class BackupTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hmeichhia',
                'sub_categories_id' => 1,
                'created_at' => '2019-06-14 10:03:35',
                'updated_at' => '2019-06-14 10:03:35',
            ),
        ));
        
        
    }
}