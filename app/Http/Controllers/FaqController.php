<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function render(){
        $listFaq = Faq::get();
        return view('frontend.faq',['faqs'=>$listFaq]);
    }
}
