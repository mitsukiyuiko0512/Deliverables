<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index(Post $post)
    {
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);  
        return view('records.index')->with(['records' => $post->getPaginateByLimit()]); 
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['posts' => $post]);
        return view('records.show')->with(['records' => $post]);
    }
    
}
