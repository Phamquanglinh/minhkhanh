<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function render($slug,$page=1){
        if($tag = Tag::where('slug','=',$slug)->first()){
            $name=$tag->name;
            $productList = Tag::where('slug','=',$slug)->first()->products()->get();
            return view("frontend.tag",['name'=>$name,'products'=>$productList,'page'=>$page]);
        }else{
            return view("errors.404");
        }

    }
}
