<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function save(Request $request){
        $requestData = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'topic'=>$request->topic,
            'content'=>$request->contents,
        ];
        Report::create($requestData);
        return redirect()->back()->with('success','success');
    }
    public function report(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'topic'=>"Phản hồi  về đơn hàng ".$request->topic,
            'content'=>$request->contents,
        ];
        Report::create($data);
        return redirect()->back()->with("reported",'Đã gửi phản hồi');
    }
    public function refund(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'topic'=>"Yêu cầu đổi trả đơn hàng ".$request->topic,
            'content'=>$request->contents,
        ];
        Report::create($data);
        return redirect()->back()->with("reported",'Đã gửi yêu cầu');
    }
}
