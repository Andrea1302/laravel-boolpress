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
}
