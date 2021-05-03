<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show(){
        $data=Todo::all();
        return view('frontend.show',['todo'=>$data]);
    }
}

