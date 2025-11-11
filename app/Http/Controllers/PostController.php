<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data= Post::latest()->paginate(5);
    return view('post/index',['posts'=>$data,'pageTitle'=>'blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create',['pageTitle'=>'blog-created post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
        // D the operation
        $post=new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');
        
        $post->save();
        return redirect('/blog')->with('success','Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::findOrFail($id);
    return view('post.show',['post'=>$post,'pageTitle'=>$post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::findOrFail($id);
    return view('post.edit',data: ['post'=>$post,'pageTitle'=>'blog - edit post:'.$post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {
        $post=Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');
        
        $post->save();
        return redirect('/blog')->with('success','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('/blog')->with('success','Post deleted successfully!');
    }
}
