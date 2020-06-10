<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class MailchimpController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Check if email is subscribed, if not, send email to list id

        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
            return redirect('newsletter')->with('status', 'thanks!');

        }

        return redirect('newsletter')->with('status', 'you are already subscribed');
    }

    public static function showMembers()
    {

        // Show data from the list id

        $total =  Newsletter::getMembers()['total_items'];
        $parameters = ['count' => $total];
        
        return Newsletter::getMembers($string = '', $parameters)['members'];  
    }

    public function update($variable, $value)
    {

        if ($variable == "APP_NAME" ||  $variable ==  "MAIL_FROM_NAME") {
            $value = "\"$value\"";
        }

        $values = array(
            $variable=>$value
            );
        $this->setEnvironmentValue($values);

        Artisan::call('config:clear');
        return true;
    }

}
