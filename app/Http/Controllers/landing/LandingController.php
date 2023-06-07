<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Kategori;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $kategori = Kategori::all();
        $testimoni = Testimoni::all();
        return view('landing.index', [
            'slider' => $slider,
            'kategori' => $kategori,
            'testimoni' => $testimoni
        ]);
    }

    public function product()
    {
        return view('landing.product');
    }

}
