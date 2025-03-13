<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function homegaleri()
    {
        // Mengambil 6 gambar galeri terbaru
        $galerisTerbaru = Galeri::latest()->take(6)->get();

        // Mengirim data ke view
        return view('home', compact('galerisTerbaru'));
    }
}
