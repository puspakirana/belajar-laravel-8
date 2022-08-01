<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()

            //diurutkan dari paling baru
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => $post['title'],
            "active" => "posts",
            "posts" => $post
        ]);
    }
}
