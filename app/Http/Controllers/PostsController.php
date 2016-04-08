<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    
    public function index()
    {
    	$posts = \App\Post::all();
    	$data=compact('posts');
    	return view('test',$data);
    }

    public function show($id)
    {
    	$post = \App\Post::find($id);
    	$data = compact('post');
    	return view('posts.show',$data);
    }
}
