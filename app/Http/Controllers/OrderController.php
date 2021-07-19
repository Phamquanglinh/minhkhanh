<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function render(){

    }
    public  function store(Request $request){
        $data = [
            'user_id'=>backpack_user()->id,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'note'=>$request->note,
        ];
        $order = Order::create($data);

        $carts = explode('-',$request->carts);
        foreach ($carts as  $id){
            Cart::find($id)->update(['order_id'=>$order->id]);
        }
        return redirect()->back();
    }
}
