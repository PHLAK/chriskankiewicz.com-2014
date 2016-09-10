<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function posts(Post $post)
    {
        // return view('blog.index', ['posts' => $post->get()]);
        return view('blog.index');
    }

    public function post($slug)
    {
        return view('blog.post');
    }
}
