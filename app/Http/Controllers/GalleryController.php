<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\GalleryImage;

class GalleryController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('created_at', 'desc')->get();
        $galleryImages = GalleryImage::orderBy('created_at', 'desc')->paginate(12);
        return view('gallery', [
            'clubs' => $clubs,
            'galleryImages' => $galleryImages,
        ]);
    }
}
