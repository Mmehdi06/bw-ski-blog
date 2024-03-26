<?php

namespace App\Http\Controllers;

use App\Models\Post;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $posts = Post::query()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dashboard', compact('posts'));
    }
}
