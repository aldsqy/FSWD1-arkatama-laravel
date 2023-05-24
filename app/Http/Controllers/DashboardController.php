<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = [
            [
                'image' => 'images/porto1.jpg',
                'name' => 'Product 1',
                'description' => 'Description of Product 1.',
            ],
            [
                'image' => 'images/porto2.jpg',
                'name' => 'Product 2',
                'description' => 'Description of Product 2.',
            ],
            [
                'image' => 'images/porto3.jpg',
                'name' => 'Product 2',
                'description' => 'Description of Product 2.',
            ],
            [
                'image' => 'images/porto4.jpg',
                'name' => 'Product 3',
                'description' => 'Description of Product 3.',
            ],
            [
                'image' => 'images/porto5.jpg',
                'name' => 'Product 1',
                'description' => 'Description of Product 1.',
            ],
            [
                'image' => 'images/porto6.jpg',
                'name' => 'Product 2',
                'description' => 'Description of Product 2.',
            ],
        ];

        return view('dashboard', compact('products'));
    }
}

