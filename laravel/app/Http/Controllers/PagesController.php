<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use TCG\Voyager\Traits\Translatable;

class PagesController extends Controller
{

    public function show($locale, $slug)
    {
        $page = \App\Page::where('slug', '=', $slug)->firstOrFail();

        return view ('front.page.show', ['page' => $page,'locale' => $locale,]);
    }
}
