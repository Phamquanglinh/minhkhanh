<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ListPostController extends Controller
{
    public function render(){
        $posts = Post::get();
        return view("frontend.listpost",['posts'=>$posts]);
    }
}
