<?php

namespace App\Http\Controllers;

use App\Models\Club;

class AboutController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();

        return view('about', [
            'clubs' => $clubs,
        ]);
    }
}
