<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function render($slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        if (isset($product->name)) {
            $tmp = str_replace(['[', ']', '"'], "", $product->avatar);
            $product->avatars = explode(",", $tmp);
            return view("frontend.product", ['product' => $product]);
        } else {
            return view("errors.404");
        }

    }
}
