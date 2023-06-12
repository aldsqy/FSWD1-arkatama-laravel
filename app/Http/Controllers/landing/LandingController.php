<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Kategori;
use App\Models\Testimoni;
use App\Models\Produk;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', 'accepted')->get();
        $kategori = Kategori::where('status', 'accepted')->get();
        $testimoni = Testimoni::where('status', 'accepted')->get();
        $produk = Produk::where('status', 'accepted')->get();

        return view('landing.index', [
            'slider' => $slider,
            'kategori' => $kategori,
            'testimoni' => $testimoni,
            'produk' => $produk
        ]);
    }

    public function product()
    {
        $kategori = Kategori::where('status', 'accepted')->get();
        $produk = Produk::where('status', 'accepted')->get();

        return view('landing.product', [
            'kategori' => $kategori,
            'produk' => $produk
        ]);
    }
}
