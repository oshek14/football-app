<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function show(Request $request)
    {
        $blogpost = BlogPost::where('id', $request->id)->first();
        return view('blogpost', [
            'blogpost' => $blogpost,
        ]);
    }

}
