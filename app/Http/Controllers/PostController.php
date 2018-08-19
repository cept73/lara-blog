<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Posts;

class PostController extends Controller
{
    /**
     * Show main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('home', compact('posts'));
    }

    /**
     * Show one post.
     *
     * @return \Illuminate\Http\Response
     */
    public function showPost($slug)
    {
        $post = Posts::where('slug', '=', $slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
