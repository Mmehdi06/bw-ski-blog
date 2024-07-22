<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Handle the file upload if a new post_image is uploaded
        if ($request->hasFile('post_image')) {
            // Delete the old post_image if it exists
            if ($post->post_image) {
                Storage::disk('public')->delete($post->post_image);
            }
            $data['post_image'] = $request->file('post_image')->store('post_images', 'public');
        }

        $post->update($data);

        return redirect()->route('posts.index');
    }

    // Update a post

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the file upload and store the path
        if ($request->hasFile('post_image')) {
            $post_imagePath = $request->file('post_image')->store('post_images', 'public');
            $data['post_image'] = $post_imagePath;
        }

        // Add userId to the post for foreign key
        $data['user_id'] = \Auth::user()->id;

        Post::create($data);

        return redirect()->route('dashboard')->with('status', 'post-created');
    }

}
