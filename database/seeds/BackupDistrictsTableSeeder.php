<?php

use Illuminate\Database\Seeder;

class BackupDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Aizawl',
                'created_at' => '2019-06-17 07:08:33',
                'updated_at' => '2019-06-17 07:08:33',
            ),
        ));
        
        
    }
}