<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }
}