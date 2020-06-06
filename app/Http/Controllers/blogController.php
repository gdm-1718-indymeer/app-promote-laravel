<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class blogController extends Controller
{
    public function index()
    {
        // settings
        //App\Post::all()

        $itemsPerPage =  \App\Page::where('slug','=','contact')->pluck('pagination');
        

        $posts = \App\Post::orderBy('created_at', 'asc')->paginate($itemsPerPage[0]);
        return view(
            'front.post.index',
            [
                'posts' => $posts,
            ]
        );
    }
    public function show($slug)
    {
 

        // vars
        $alert = (object) [];
        //$post = App\Post::where('slug', '=', $slug)->firstOrFail();
        if (is_numeric($slug)) {
            $post = \App\Post::find($slug);
            dd('im here');
            // $alert->message = "From id";
            // $alert->role = "warning";
        } else {
            $post = \App\Post::where('slug', '=' , $slug)->firstOrFail();
            // $alert->message = "From slug";
            // $alert->role = "danger";

        }
        
        // heeft project
            return view(
                'front.post.show',
                [
                    'post' => $post,
            
                    // 'alert' => $alert,
                ]
            );
        


    
    }


}
