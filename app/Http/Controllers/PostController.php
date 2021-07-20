<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function render($slug)
    {
        $post = Post::where('slug', '=', $slug)->first();
        if (isset($post)) {
            return view('frontend.post', ['post' => $post]);
        } else {
            return view('error.404');
        }
    }
}
