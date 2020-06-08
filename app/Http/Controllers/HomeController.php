<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
class HomeController extends Controller
{
   
    public function index($locale)
    {
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
