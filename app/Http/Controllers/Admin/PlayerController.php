<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::orderBy('created_at', 'desc')->get();
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('admin.players', [
            'players' => $players,
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
        $player = new Player;
        if($request->image) {
            $playerImage = $request->file('image');
            $extension = $playerImage->getClientOriginalExtension();
            $fileName = $playerImage->getFilename() . '.' . $extension;
            Storage::disk('public')->put($fileName,  File::get($playerImage));
            $player->image = $fileName;
        }
        $player->name = $request->name;
        $player->designation = $request->designation;
        $player->club_id = $request->club_id;
        if ($player->save()) {
            return redirect()->back()->with(['addPlayerStatus' => 1]);
        } else {
            return redirect()->back()->with(['addPlayerStatus' => 0]);
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
        $player = Player::where('id', $request->id)->first();
        if($request->image) {
            $file_path = public_path() . '/app_images' . '/' . $player->image;
            if(file_exists($file_path) && !is_dir($file_path)) {
                unlink($file_path);
            }
            $playerImage = $request->file('image');
            $extension = $playerImage->getClientOriginalExtension();
            $fileName = $playerImage->getFilename() . '.' . $extension;
            Storage::disk('public')->put($fileName,  File::get($playerImage));
            $player->image = $fileName;
        }

        $player->name = $request->name;
        $player->designation = $request->designation;
        $player->club_id = $request->club_id;
        if ($player->save()) {
            return redirect()->back()->with(['updatePlayerStatus' => 1]);
        } else {
            return redirect()->back()->with(['updatePlayerStatus' => 0]);
        }
    }

    public function show($id)
    {
        $player = Player::where('id', $id)->first();
        $clubs = Club::orderBy('created_at', 'desc')->get();
        return view('admin.player-edit', [
            'player' => $player,
            'clubs' => $clubs,
        ]);
    }

    public function destroy($id)
    {
        $player = Player::where('id', $id)->first();
        $file_path = public_path() . '/app_images' . '/' . $player->image;
        if(file_exists($file_path) && !is_dir($file_path)) {
            unlink($file_path);
        }
        $player->delete();
        return redirect()->route('players.index');
    }
}
