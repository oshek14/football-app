<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        return view('club')->with('id', $request->id);
    }
}
