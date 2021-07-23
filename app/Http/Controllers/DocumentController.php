<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public  function index($page = 1 ){
        //step
            $step = 12;
        //
        $documents = Document::orderBy('updated_at',"DESC")->get();
        if(($page-1)*$step > $documents->count()){
            $page=1;
        }
        $documents->start = ($page-1)*$step;
        $documents->end = ($page)*$step-1;
        return view("frontend.document",['documents'=>$documents,'page'=>$page]);
    }
}
