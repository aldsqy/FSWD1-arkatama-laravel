<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('landing.index', [
            'slider' => $slider
        ]);
    }

    public function product()
    {
        return view('landing.product');
    }

}
