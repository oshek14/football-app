<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', [
            'blogposts' => DB::table('blog_posts')->orderBy('created_at', 'desc')->paginate(12)
        ]);
    }
}
