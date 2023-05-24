<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            [
                'image' => 'images/porto7.jpg',
                'name' => 'Product 2',
                'description' => 'Description of Product 2.',
            ],
            [
                'image' => 'images/porto8.jpg',
                'name' => 'Product 3',
                'description' => 'Description of Product 3.',
            ],
        ];

        return view('product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
