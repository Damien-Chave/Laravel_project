<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::OrderBy('created_at', 'desc')->paginate(3);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        
        //Store data
        $post = new Post;
        
        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();
        Session::flash('success', 'Post successfully saved !');
        
        //Redirect view
//        dd($post->id);
        return redirect()->route('posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $page = Post::OrderBy('created_at', 'desc')->simplePaginate(1);
//        $post = Post::find($post->id);
//        dd($post->simplePaginate(1));
        return view('posts.show')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //Validate data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));
        
        //Update data
        $post = Post::find($post->id);
        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();
        Session::flash('success', 'Post successfully updated !');
        
        //Redirect view
        return redirect()->route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post->id);
        $post->delete();
        Session::flash('Danger', 'Post Deleted');
        return redirect()->route('posts.index');
    }
}
