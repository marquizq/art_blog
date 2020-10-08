<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function show($slug)
    {
        return view('post',[
            'post' => Post::where('slug',$slug)->firstOrFail()
        ]);

    }
    public function index($post)
    {
        $posts = [
          'my-first-post' => 'This is my first post',
          'my-second-post' => 'This is on going posts',
        ];

//        if(!array_key_exists($post,$posts)){
//            abort(404,'Sorry the page is not found');
//        }
//
//
//        return view('post',[
//            'post' => $posts[$post]
//        ]);
    }
}
