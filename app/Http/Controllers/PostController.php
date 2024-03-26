<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class PostController extends Controller
{
    // Show all Individual posts page
    public function showById($id): View
    {
        $post = Post::find($id);

        return view('posts.post', compact('post'));
    }

    // Show Create post page
    public function show(): View
    {
        return view('admin.posts.index');
    }


    // Edit a post
    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    // Delete a post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    // Create a new post
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($data);

        return redirect()->route('dashboard');
    }

    // Update a post
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($data);

        return redirect()->route('posts.index');
    }
}
