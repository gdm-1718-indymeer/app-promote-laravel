<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    
    // recieve content from the database and check on slug, give the current Locale to a view from the url tag

    public function index($locale){
        $page = \App\Page::where('slug', 'contact')->firstOrFail();
        return view('front.contact.index', [
            'page' => $page,
            'locale' => $locale,

        ]);

    }

    public function postContact(Request $r){

        // recieve content from the form request and send mail with the given values

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'subject' => "shazam support",
            'content' => $r->content,

        ];  

        Mail::send('mails.contact', $data, function ($message)  use($r){
            $message->sender('indymeer@student.arteveldehs.be');
            $message->to( setting('admin.admin_email'));
            $message->cc($r->email, $r->name);
            $message->subject('shazam support');
           
        });

     return \redirect(url(app()->getLocale() . '/contact'));
    }
}
