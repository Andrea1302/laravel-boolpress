<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use App\Tag;


class MyController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function auth(){
        $posts = Post::All();

        $categories = Category::all();
        $tags = Tag::All();

        return view('pages.auth',compact('posts','categories','tags'));
    }

    public function login(){
        return view('pages.login');
    }
    public function register(){
        return view('pages.registration');
    }

  
    public function getApiUser(){
        $user = User::All();
        return json_encode($user);
    }
    public function getApi(){

        $posts = Post::All();

        return json_encode($posts);
    }
}
