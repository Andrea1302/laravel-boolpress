<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class MyController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function auth(){
        return view('pages.auth');
    }

    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.registration');
    }
}
