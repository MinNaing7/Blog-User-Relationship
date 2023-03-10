<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{   
    public function index(Category $category) {
        return view('blogs', [
            'blogs' => $category->blogs->load('category')
        ]);
    }
}
