<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GalleryImage;
use App\Models\Club;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();
        $galleryImages = GalleryImage::orderBy('created_at', 'desc')->get();
        return view('admin.gallery-images', [
            'clubs' => $clubs,
            'galleryImages' => $galleryImages
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
        $galleryImage = new GalleryImage;
        if($request->image) {
            $galleryImageImage = $request->file('image');
            $extension = $galleryImageImage->getClientOriginalExtension();
            $fileName = $galleryImageImage->getFilename() . '.' . $extension;
            Storage::disk('public')->put($fileName,  File::get($galleryImageImage));
            $galleryImage->image = $fileName;
        }
        if ($galleryImage->save()) {
            return redirect()->back()->with(['addGalleryImageStatus' => 1]);
        } else {
            return redirect()->back()->with(['addGalleryImageStatus' => 0]);
        }
    }

    public function destroy($id)
    {
        $galleryImage = GalleryImage::where('id', $id)->first();
        $file_path = public_path() . '/app_images' . '/' . $galleryImage->image;
        if(file_exists($file_path) && !is_dir($file_path)) {
            unlink($file_path);
        }
        $galleryImage->delete();
        return redirect()->route('gallery-images.index');
    }
}
