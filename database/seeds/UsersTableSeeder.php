<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'avatar' => 'users/June2020/hJGKjaiJiWE5Tbf0qBTp.jpg',
                'created_at' => '2020-06-04 20:28:21',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Admin',
                'password' => '$2y$10$o0ESdUtivC6c.yRO4iROwehHl9j3/B1XQXEyXby/dODVQ9H8aY94m',
                'remember_token' => NULL,
                'role_id' => 1,
                'settings' => '{"locale":"en"}',
                'updated_at' => '2020-06-09 18:53:03',
            ),
        ));
        
        
    }
}