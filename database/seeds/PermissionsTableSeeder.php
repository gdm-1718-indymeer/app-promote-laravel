<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-05-28 14:23:46',
                'updated_at' => '2020-05-28 14:23:46',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-05-28 14:59:53',
                'updated_at' => '2020-05-28 14:59:53',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_mailchimp',
                'table_name' => 'mailchimp',
                'created_at' => '2020-06-04 20:41:55',
                'updated_at' => '2020-06-04 20:41:55',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_mailchimp',
                'table_name' => 'mailchimp',
                'created_at' => '2020-06-04 20:41:55',
                'updated_at' => '2020-06-04 20:41:55',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_mailchimp',
                'table_name' => 'mailchimp',
                'created_at' => '2020-06-04 20:41:55',
                'updated_at' => '2020-06-04 20:41:55',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_mailchimp',
                'table_name' => 'mailchimp',
                'created_at' => '2020-06-04 20:41:55',
                'updated_at' => '2020-06-04 20:41:55',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_mailchimp',
                'table_name' => 'mailchimp',
                'created_at' => '2020-06-04 20:41:55',
                'updated_at' => '2020-06-04 20:41:55',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_donates',
                'table_name' => 'donates',
                'created_at' => '2020-06-07 16:12:59',
                'updated_at' => '2020-06-07 16:12:59',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_donates',
                'table_name' => 'donates',
                'created_at' => '2020-06-07 16:12:59',
                'updated_at' => '2020-06-07 16:12:59',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_donates',
                'table_name' => 'donates',
                'created_at' => '2020-06-07 16:12:59',
                'updated_at' => '2020-06-07 16:12:59',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_donates',
                'table_name' => 'donates',
                'created_at' => '2020-06-07 16:12:59',
                'updated_at' => '2020-06-07 16:12:59',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_donates',
                'table_name' => 'donates',
                'created_at' => '2020-06-07 16:12:59',
                'updated_at' => '2020-06-07 16:12:59',
            ),
        ));
        
        
    }
}