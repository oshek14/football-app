<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Club;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $blogspots = DB::table('blog_posts')->orderBy('created_at', 'desc')->paginate(12);
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('news', [
            'blogposts' => $blogspots,
            'clubs' => $clubs,
        ]);
    }
}
