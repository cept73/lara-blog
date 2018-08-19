<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Posts;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
	// Auth required
        //$this->middleware('auth');
    }

    /**
     * Show the list of posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$posts = Posts::all();

	return view('home', compact('posts'));
    }

    public function logout()
    {
	Auth::logout();

	return redirect('/');
    }

}