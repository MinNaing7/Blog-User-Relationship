<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index(User $user) {
        // dd($user->blogs);
        return view('blogs', [
            'blogs' => $user->blogs->load('user')
        ]);
    }
}
