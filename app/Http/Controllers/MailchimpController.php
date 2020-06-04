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
        if ( ! Newsletter::isSubscribed($request->user_email) ) {
            Newsletter::subscribe($request->user_email);
            return redirect('newsletter')->with('status', 'thanks!');

        }

        return redirect('newsletter')->with('status', 'you are already subscribed');
    }

    public function showMembers()
    {
        return Newsletter::getmembers();
    }

}
