<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Traits\Translatable;
use App\Post;

class blogController extends Controller
{
    public function index($locale)
    {
      
        $page =  \App\Page::where('slug','=','blog')->firstOrFail();
        //$posts = \App\Post::withTranslations($locale)->paginate($page['pagination']);
        $posts = \App\Post::orderBy('created_at', 'asc')->paginate($page['pagination']);
       // $posts->withTranslation($locale)->get;

        return view(
            'front.post.index',
            [
                'posts' => $posts,
                'locale' => $locale,
                'page' => $page,
            ]
        );
    }
    public function show($locale, $slug)
    {
 
        $page =  \App\Page::where('slug','=','blog')->firstOrFail();

        $alert = (object) [];
        if (is_numeric($slug)) {
            $post = \App\Post::find($slug);
            
  
        } else {
            $post = \App\Post::where('slug', '=' , $slug)->firstOrFail();
   

        }
        
            return view(
                'front.post.show',
                [
                    'post' => $post,
                    'locale' => $locale,
                    'page' => $page,
            
                ]
            );
        


    
    }


}
