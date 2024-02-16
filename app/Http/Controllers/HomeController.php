<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
//        get 3 first posts
        $posts = Post::all()->take(3);

        return view('home', compact('posts'));
    }
}
