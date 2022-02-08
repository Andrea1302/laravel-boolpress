<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use App\Category;
use App\Tag; 



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store( Request $request){

        $data = $request -> validate([
          'testo_post' => 'required',
          'autore' =>'required'
        ]);

        $post = Post::make($data);
        $category = Category::findOrFail($request -> get('category'));
        $post -> category() -> associate($category);
        $post -> save();


        $tags = Tag::findOrFail($request -> get('tags'));
        $post -> tags() -> attach($tags);
        $post -> save();

        return redirect() -> route('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
