<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/', [BlogsController::class, 'index']);

Route::get('/blogs/{blog:slug}', [BlogsController::class, 'show']);

Route::get('/categories/{category:slug}', [CategoriesController::class, 'index']);

Route::get('/users/{user:name}', [UsersController::class, 'index']);
