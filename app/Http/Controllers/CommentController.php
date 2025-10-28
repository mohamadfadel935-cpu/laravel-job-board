<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class CommentController extends Controller

{

    function index(){
    $data= Comment::all();
    return view('comment/index',['comments'=>$data,'pageTitle'=>'blog']);
}

function create(){
    /* comment::create([
        'author'=>'Mohammed Fadel',
        'contant'=>'this is a new test',
        'post_id'=>3
    ]); */
    Comment::factory(5)->create();
    return redirect('/comments');
}

}