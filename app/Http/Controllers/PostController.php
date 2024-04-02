<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('index', compact('posts'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(StoreRequest $request)
    {
        $post = Post::query()->create($request->validated() );
        return to_route('posts.show', compact('post'));
    }

    public function show(Post $post)
    {
        $post->load('category');
        return view('post', compact('post'));
    }

    public function edit(Post $post)
    {

        return view('edit', compact('post'));
    }

    public function update(Post $post, StoreRequest $request)
    {
        $post->update($request->validated());
        return to_route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('posts.index');
    }
}
