<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;


class PostController extends Controller
{
    // Show all Individual posts page
    public function showById($id): View
    {
        $post = Post::find($id);

        return view('posts.post', compact('post'));
    }

    // Show all posts for an admin to add, edit, delete
    public function show(): View
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    // Edit a post
    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function create(): View
    {
        return view('admin.posts.create');
    }
}
