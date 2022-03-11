<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $all_service = Post::all();

        return view('blog.services', ['blog' => $all_service])
                    ->with('title', 'Services - New Vision');
                    
    }
}
