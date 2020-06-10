<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
class HomeController extends Controller
{
   
    public function index($locale)
    {
        // recieve content from the database and check on slug, give the current Locale to a view from the url tag

        $page =  \App\Page::where('slug','=','home')->firstOrFail();
        return view(
            'welcome',
            [
                'page' => $page,
                'locale' => $locale,

            ]
          );
    }
  
}
