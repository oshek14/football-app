<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use App\Models\Club;

class IndexController extends Controller
{
    public function index()
    {
        $blogposts = BlogPost::orderBy('created_at', 'desc')->limit(3)->get();
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('index', [
            'blogposts' => $blogposts,
            'clubs' => $clubs
        ]);
    }
}
