<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function render()
    {
        return view("frontend.index");
    }
}
