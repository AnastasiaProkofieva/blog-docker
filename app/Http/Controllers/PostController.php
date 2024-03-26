<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('index', compact ('posts'));
    }

    public function create()
    {

        return view('create');
    }

    public function store()
    {
        Post::query()->create(
            [
                'title' => request()->title,
                'description' => request()->description,
                'body' => request()->body,
                'cover' => 'cover',
            ]
        );
        return redirect('/');
    }

    public function show($id)
    {
        $post = Post::query()->find($id);
        return view('post', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::query()->find($id);
        return view('edit', compact('post'));
    }

    public function update($id)
    {
        Post::query()
            ->where('id', $id)
            ->update(
                ['title' => request()->title,
                    'description' => request()->description,
                    'body' => request()->body,
                    'cover' => 'cover',
                ]
            );
        return redirect('/');
    }

    public function destroy($id)
    {
        Post::query()
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }
}
