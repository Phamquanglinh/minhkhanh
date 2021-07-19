<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id','=',backpack_user()->id)->get();
        $customer = Customer::where('user_id','=',backpack_user()->id)->first();
        foreach ($carts as $cart){
            $product_img = $cart->getProduct()->first()->avatar;
            $tmp = str_replace(['[',']','"'],"",$product_img);
            $cart->avatar =  env("app_url")."/".explode(",",$tmp)[0];
        }
        return view("frontend.cart",['carts'=>$carts,'customer'=>$customer]);
    }
    public function calPrice(Request $request){
        if($request->quantity < 1) {
            $request->quantity = 1;
        }
        $data = [
            'quantity'=>$request->quantity
        ];
        $cart = Cart::where('id','=',$request->id);
        $price =  number_format($cart->first()->getProduct()->first()->price*$request->quantity)." đ";
        $cart->update($data);
        return "<strong data='".$cart->first()->getProduct()->first()->price*$request->quantity."'>$price</strong>";
    }
    public  function addCart(Request $request){
        $data=[
            'product_id'=>$request->product_id,
            'user_id'=>backpack_user()->id,
            'quantity'=>$request->quantity,
        ];
        $myCart = Cart::where('user_id','=',backpack_user()->id)->get();
        foreach ($myCart as $item){
            if($item->product_id == $request->product_id) {
                if($item->order_id==null){
                    Cart::where('id','=',$item->id)->update(['quantity'=>$item->quantity+$request->quantity]);
                    return redirect()->route("cart");
                }
            }
        }
        Cart::create($data);
        return redirect()->route("cart");
    }
}
