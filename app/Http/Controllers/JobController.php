<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use Illuminate\Http\Request;

class JobController extends Controller
{
    
    function index(){
        $jobs=JobModel::all();
        return view('job/index',['jobs'=>$jobs,'name'=>'MHD']);
    }
}
