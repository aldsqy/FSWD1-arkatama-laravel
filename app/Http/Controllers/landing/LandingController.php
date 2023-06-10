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
        $slider = Slider::all();
        $kategori = Kategori::all();
        $testimoni = Testimoni::all();
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
        $kategori = Kategori::all();
        $produk = Produk::where('status', 'accepted')->get();

        return view('landing.product', [
            'kategori' => $kategori,
            'produk' => $produk
        ]);
    }
}
