<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
    $data= Tag::all();
    return view('tag/index',['tags'=>$data,'pageTitle'=>'blog']);
}
function create(){
    Tag::create([
        'title'=>'software engineering'
    ]);
    return redirect('/tags');
}
 public function testManyToMany(){
   /*  $post1=Post::find(1);
    $post2=Post::find(2);

    $post1->tags()->attach([1,2]);
    $post2->tags()->attach([1]);
    return response()->json(([
        'post1'=>$post1->tags,
        'post2'=>$post2->tags()
    ])); */
    $tag=Tag::find(3);
    $tag->posts()->attach([1]);
    return response()->json(([
        'tag'=>$tag->title,
        'posts'=>$tag->posts
    ]));
 }
}