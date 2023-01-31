<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view('blogs', [
            'blogs' => Blog::with(['category','user'])->get()
        ]);
    }
    public function show(Blog $blog) {
        return view('blog', [
            'blog' => $blog
        ]);
    }
}
