<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function userTable()
    {
        $users = User::all();
        return view('user', compact('users'));
    }
    public function userAbout()
    {
        return view('about');
    }
    public function __construct()
    {
        $this->middleware('auth')->except('user.blog');
    }
}
