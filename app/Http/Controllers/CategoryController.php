<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function render($slug,$page=1){
        //Set step chia trang
        //Tối đa $step sản phẩm trên 1 page
        $step =12;
        //
        if($cat = Category::where('slug','=',$slug)->first()){
            $productList = Category::where('slug','=',$slug)->first()->products()->get();
            if($page < 1 || $page>$productList->count()/$step){
                $page=1;
            }
            return view("frontend.category",['step'=>$step,'thisCat'=>$cat,'products'=>$productList,'page'=>$page]);
        }else{
            return view("errors.404");
        }

    }
}
