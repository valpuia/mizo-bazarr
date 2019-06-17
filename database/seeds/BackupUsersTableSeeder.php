<?php

use Illuminate\Database\Seeder;

class BackupUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@mizobazarr.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => Hash::make('pass'),
                'contact' => 0,
                'point' => 0,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2019-06-14 09:50:25',
                'updated_at' => '2019-06-14 09:50:25',
            ),
        ));
        
        
    }
}