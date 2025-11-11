<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCommentRequest;
use App\Http\Requests\BlogPostRequest;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Comment::all();
        return view('comment/index',['comments'=>$data,'pageTitle'=>'blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create',['pageTitle'=>'comments-created comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        $post=Post::findOrFail($request->input('post_id'));
        $comment=new Comment();
        $comment->author = $request->input('author');
        $comment->content = $request->input('content');
        $comment->post_id = $request->input('post_id');
        
        $comment->save();
        return redirect(to:"/blog/{$post->id}")->with('success','Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $comment=Comment::findOrFail($id);
    return view('comment.show',['comment'=>$comment,'pageTitle'=>'Comment page']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('comment.edit',['pageTitle'=>'comment - edit comment']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
