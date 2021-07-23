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
}
