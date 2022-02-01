<?php

namespace App\Http\Controllers;

use App\Models\Club;

class GalleryController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('gallery', [
            'clubs' => $clubs,
        ]);
    }
}
