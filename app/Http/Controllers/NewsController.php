<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $blogposts = BlogPost::all();
        return view('news', [
            'blogposts' => DB::table('blog_posts')->paginate(12)
        ]);
    }
}
