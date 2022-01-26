<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;

class IndexController extends Controller
{
    public function index()
    {
        $blogposts = BlogPost::orderBy('created_at', 'desc')->limit(3)->get();
        return view('index', [
            'blogposts' => $blogposts,
        ]);
    }
}
