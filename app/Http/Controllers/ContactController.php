<?php

namespace App\Http\Controllers;

use App\Models\Club;

class ContactController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();

        return view('contact', [
            'clubs' => $clubs,
        ]);
    }
}
