<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    public function index(Request $request)
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();
        $club = Club::where('id', $request->id)->with('players')->first();

        return view('club', [
            'club_id' => $request->id,
            'clubs' => $clubs,
            'club' => $club,
        ]);
    }
}
