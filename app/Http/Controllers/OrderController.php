<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
        $this->senMail($order->id);
        return redirect()->back();
    }
    public function senMail($id){
        $total =0;
        $order = Order::find($id);
        $carts = $order->carts()->get();

        foreach ($carts as $index => $cart){
            $tmp = str_replace(['[', ']', '"'], "", $cart->getProduct()->first()->avatar);
            $cart->thumbnail = explode(",", $tmp)[0];
            $total += $cart->getProduct()->first()->price*$cart->quantity;
        }
        Mail::send('mail.order', ['order' => $order, 'carts' => $carts,'total'=>$total], function($message){
            $message->to('10a5dev4@gmail.com', 'Sale')->subject('Đơn hàng mới từ '.backpack_user()->name);
        });
        Session::flash('flash_message', 'Send message successfully!');
    }
}
