<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Posts;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPost($slug)
    {
	$post = Posts::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
        return view('posts');
    }
}
