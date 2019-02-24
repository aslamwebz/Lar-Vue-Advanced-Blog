<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $users = User::all();
        return view('manage.posts.index', compact('posts', 'users'));
    }

    public function indexHome()
    {
        $posts = Post::all();
        $users = User::all();
        // $users = $users->name;
        return view('home', compact('posts', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate = ([
            'title' => 'required',
            'content' => 'required',
            'excerpt' => 'required',
        ]);

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = Auth::user()->id;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->comment_count = 0;

        if($post->save()){
            return redirect()->route('posts.index')->with('success', 'Post Added Successfully');
        } else {
            return redirect()->route('posts.create')->withInput()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('manage.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('manage.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate = ([
            'title' => 'required',
            'content' => 'required',
            'excerpt' => 'required',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = $post->author_id;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->comment_count = 0;

        if($post->save()){
            return redirect()->route('posts.index')->with('success', 'Post Added Successfully');
        } else {
            return redirect()->route('posts.create')->withInput()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post Deleted Successfully');

    }
}
