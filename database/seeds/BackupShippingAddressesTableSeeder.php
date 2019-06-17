<?php

use Illuminate\Database\Seeder;

class BackupShippingAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shipping_addresses')->delete();
        
        
        
    }
}