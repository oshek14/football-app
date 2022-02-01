<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Club;
class BlogPostController extends Controller
{
    public function show(Request $request)
    {
        $blogpost = BlogPost::where('id', $request->id)->first();
        $blogposts = BlogPost::orderBy('created_at', 'desc')->where('id', '!=', $request->id)->limit(3)->get();
        $clubs = Club::orderBy('created_at', 'desc')->get();

        return view('blogpost', [
            'blogpost' => $blogpost,
            'blogposts' => $blogposts,
            'clubs' => $clubs,
        ]);
    }

}
