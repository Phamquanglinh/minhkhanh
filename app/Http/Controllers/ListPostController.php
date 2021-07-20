<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ListPostController extends Controller
{
    public function render()
    {
        $posts = Post::get();
        return view("frontend.listpost", ['posts' => $posts]);
    }
}
