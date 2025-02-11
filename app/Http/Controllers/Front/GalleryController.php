<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryAlbum;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Gallery Page',
            'description' => 'This is a gallery page',
            'albums' => GalleryAlbum::all(),
            'galleries' => Gallery::with('album')->get(),
        ];
        // return response()->json($data);
        return view('front.gallery', $data);
    }
}
