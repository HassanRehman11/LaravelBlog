<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('homee');
    }
    public function about(){
        return view('about');
    }

}
