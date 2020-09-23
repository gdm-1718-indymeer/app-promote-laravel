<?php

use Illuminate\Database\Seeder;

class MailchimpTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mailchimp')->delete();
        
        \DB::table('mailchimp')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => '',
                'title' => 'test',
                'body' => 'test',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}