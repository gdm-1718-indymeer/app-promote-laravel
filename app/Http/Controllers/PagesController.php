<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($slug)
    {
        $page = \App\Page::where('slug', $slug)->firstOrFail();

        //return view ('page.show', ['page' => $page]);
    }
}
