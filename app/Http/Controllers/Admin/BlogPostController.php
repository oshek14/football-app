<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogposts = BlogPost::all();
        return view('admin.blogposts', [
            'blogposts' => $blogposts,
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
        $blogPostImage = $request->file('image');
        $extension = $blogPostImage->getClientOriginalExtension();
        $fileName = $blogPostImage->getFilename().'.'.$extension;
        Storage::disk('public')->put($fileName,  File::get($blogPostImage));
        $blogPost = new BlogPost;
        $blogPost->title = $request->title;
        $blogPost->description = $request->description;
        $blogPost->short_description = $request->short_description;
        $blogPost->image = $request->image;
        $blogPost->image = $fileName;
        if ($blogPost->save()) {
            return redirect()->back()->with( ['addblogPostStatus' => 1] );
        } else {
            return redirect()->back()->with( ['addblogPostStatus' => 0] );
        }
    }

    public function destroy($id)
    {
        BlogPost::where('id', $id)->delete();
        return redirect()->route('blogposts.index');
    }
}
