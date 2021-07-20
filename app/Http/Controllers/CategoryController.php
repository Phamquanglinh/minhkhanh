<?php

namespace App\Http\Controllers;

use App\Models\Category;
use http\QueryString;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function render($slug, $page = 1, QueryString $request=null)
    {


        //Set step chia trang
        //Tối đa $step sản phẩm trên 1 page
        $step = 3;
        //
        if ($cat = Category::where('slug', '=', $slug)->first()) {
            $query=$cat->products();
            $products=$query;
            $count=$step;
            //query by name
            if(isset($_REQUEST['name'])){
                $queryName = $_REQUEST['name'];
                $cat->name="Kết quả tìm kiếm:".$queryName;
                $products = $query->where("name","like","%".$queryName."%");
                $count = $products->count();
            }
            //sort
            if(isset($_REQUEST['sort'])){
                $queryPrice = $_REQUEST['sort'];
                $colunm = explode("-",$queryPrice)[0];
                $method = explode("-",$queryPrice)[1];
                $products = $query->orderBy($colunm,$method);
                $count = $products->count();
            }
            if ($page < 1 || $page > ($count / $step) ){
                $page = 1;
            }
            return view("frontend.category", ['step' => $step, 'thisCat' => $cat, 'products' => $products->get(), 'page' => $page]);
        } else {
            return view("errors.404");
        }

    }
}
