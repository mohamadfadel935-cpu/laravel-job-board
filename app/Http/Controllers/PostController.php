<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
    $data= Post::cursorPaginate(5);
    return view('post/index',['posts'=>$data,'pageTitle'=>'blog']);
}
function show($id){
    $post=Post::findOrFail($id);
    return view('post.show',['post'=>$post,'pageTitle'=>$post->title]);
}
function create(){
    /* Post::create([
        'title'=>'my first post',
        'body'=>'this is my pageBoldy',
        'published'=>true
    ]); */
    Post::factory(100)->create();
    return redirect('/blog');
}
public function delete(){
    Post::destroy(3);
}
}