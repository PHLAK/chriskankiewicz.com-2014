<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{

    public function index() {
        return view('blog.index');
    }

    public function post($slug) {
        return view('blog.post');
    }

}