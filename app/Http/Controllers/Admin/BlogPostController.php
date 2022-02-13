<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogposts = BlogPost::orderBy('created_at', 'desc')->get();
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
        $fileName = $blogPostImage->getFilename() . '.' . $extension;
        Storage::disk('public')->put($fileName,  File::get($blogPostImage));
        $blogPost = new BlogPost;
        $blogPost->title = $request->title;
        $blogPost->description = $request->description;
        $blogPost->short_description = $request->short_description;
        $blogPost->image = $request->image;
        $blogPost->image = $fileName;
        if ($blogPost->save()) {
            return redirect()->back()->with(['addblogPostStatus' => 1]);
        } else {
            return redirect()->back()->with(['addblogPostStatus' => 0]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blogPost = BlogPost::where('id', $request->id)->first();
        if($request->image) {
            $file_path = public_path() . '/app_images' . '/' . $blogPost->image;
            if(file_exists($file_path) && !is_dir($file_path)) {
                unlink($file_path);
            }
            unlink($file_path);
            $blogPostImage = $request->file('image');
            $extension = $blogPostImage->getClientOriginalExtension();
            $fileName = $blogPostImage->getFilename() . '.' . $extension;
            Storage::disk('public')->put($fileName,  File::get($blogPostImage));
            $blogPost->image = $fileName;
        }
        $blogPost->title = $request->title;
        $blogPost->description = $request->description;
        $blogPost->short_description = $request->short_description;
        if ($blogPost->save()) {
            return redirect()->back()->with(['updateblogPostStatus' => 1]);
        } else {
            return redirect()->back()->with(['updateblogPostStatus' => 0]);
        }
    }

    public function show($id)
    {
        $blogpost = BlogPost::where('id', $id)->first();
        return view('admin.blogpost-edit', [
            'blogpost' => $blogpost,
        ]);
    }

    public function destroy($id)
    {
        $blogpost = BlogPost::where('id', $id)->first();
        $file_path = public_path() . '/app_images' . '/' . $blogpost->image;
        unlink($file_path);
        $blogpost->delete();
        return redirect()->route('blogposts.index');
    }
}
