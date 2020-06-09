<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'posts',
                'created_at' => '2020-05-28 15:01:27',
                'updated_at' => '2020-05-28 15:01:27',
            ),
        ));
        
        
    }
}