<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndixController extends Controller
{
    function index(){
        return view('index');
    }

    function about(){
        return view('job/about',['pageTitle'=>'about page']);
    }
    function contact(){
        return view('job/contact',['pageTitle'=>'contact page']);
    }
}
