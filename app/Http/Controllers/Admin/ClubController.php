<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('admin.clubs', [
            'clubs' => $clubs,
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
        $clubLogo = $request->file('logo');
        $extension = $clubLogo->getClientOriginalExtension();
        $fileName = $clubLogo->getFilename() . '.' . $extension;
        Storage::disk('public')->put($fileName,  File::get($clubLogo));
        $club = new Club;
        $club->name = $request->name;
        $club->description = $request->description;
        $club->logo = $request->logo;
        $club->logo = $fileName;
        if ($club->save()) {
            return redirect()->back()->with(['addClubStatus' => 1]);
        } else {
            return redirect()->back()->with(['addClubStatus' => 0]);
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
        Log::info($request);
        $club = Club::where('id', $request->id)->first();
        $file_path = public_path() . '/app_images' . '/' . $club->logo;
        unlink($file_path);

        $clubLogo = $request->file('logo');
        $extension = $clubLogo->getClientOriginalExtension();
        $fileName = $clubLogo->getFilename() . '.' . $extension;
        Storage::disk('public')->put($fileName,  File::get($clubLogo));

        $club->name = $request->name;
        $club->description = $request->description;
        $club->logo = $request->logo;
        $club->logo = $fileName;
        if ($club->save()) {
            return redirect()->back()->with(['updateClubStatus' => 1]);
        } else {
            return redirect()->back()->with(['updateClubStatus' => 0]);
        }
    }

    public function show($id)
    {
        $club = Club::where('id', $id)->first();
        return view('admin.club-edit', [
            'club' => $club,
        ]);
    }

    public function destroy($id)
    {
        $club = Club::where('id', $id)->first();
        $file_path = public_path() . '/app_images' . '/' . $club->logo;
        unlink($file_path);
        $club->delete();
        return redirect()->route('clubs.index');
    }
}
