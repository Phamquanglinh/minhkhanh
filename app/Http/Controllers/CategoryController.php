<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function render($slug,$page=1){
        if($cat = Category::where('slug','=',$slug)->first()){
            $name=$cat->name;
            $productList = Category::where('slug','=',$slug)->first()->products()->get();
            return view("frontend.category",['name'=>$name,'products'=>$productList,'page'=>$page]);
        }else{
            return view("errors.404");
        }

    }
}
