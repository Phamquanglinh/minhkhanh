<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function render($slug,$page=1){
        $name = Category::where('slug','=',$slug)->first()->name;
        $productList = Category::where('slug','=',$slug)->first()->products()->get();
        return view("frontend.category",['name'=>$name,'products'=>$productList,'page'=>$page]);
    }
}
