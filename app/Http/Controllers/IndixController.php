<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndixController extends Controller
{
    public function __invoke(Request $request){
        return view('index');
    }
}
