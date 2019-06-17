<?php

use Illuminate\Database\Seeder;

class BackupItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hmeichhe bag',
                'price' => '599',
                'photo' => '["items\\\\June2019\\\\FLLcBJI6dTgfJycGWAib.jpg"]',
                'status' => 1,
                'highlight' => 0,
                'sub_categories_id' => 1,
                'brand_id' => NULL,
                'vendor_id' => NULL,
                'created_at' => '2019-06-14 10:08:58',
                'updated_at' => '2019-06-14 10:08:58',
            ),
        ));
        
        
    }
}