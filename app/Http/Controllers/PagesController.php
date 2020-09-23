<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Traits\Translatable;

class PagesController extends Controller
{

    public function show($locale, $slug)
    {
        // recieve content from the database and check on slug, give the current Locale to a view from the url tag
        // Standard controller for pages with no view, but exists with slug in database

        $page = \App\Page::where('slug', '=', $slug)->firstOrFail();

        return view ('front.page.show', ['page' => $page,'locale' => $locale,]);
    }
}
