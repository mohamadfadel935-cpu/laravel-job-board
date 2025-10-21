<?php

use App\Http\Controllers\IndixController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndixController::class,'index']);
Route::get('/about',[IndixController::class,'about']);
Route::get('/contact',[IndixController::class,'contact']);
Route::get('/job',[JobController::class ,'index']);