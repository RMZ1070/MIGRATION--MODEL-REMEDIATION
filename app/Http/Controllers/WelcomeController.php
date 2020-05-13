<?php

namespace App\Http\Controllers;

use App\Post;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $post = Post::all();
        return view('welcome',compact('post'));
    }

    
}
