<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $blogpost = BlogPost::where('id', $request->id)->first();
        return view('blogpost', [
            'blogpost' => $blogpost,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        BlogPost::create($input);
        return redirect()->back();
    }
}
