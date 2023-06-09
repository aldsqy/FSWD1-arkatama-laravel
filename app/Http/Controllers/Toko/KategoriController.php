<?php

namespace App\Http\Controllers\Toko;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.kategori',compact(['kategori']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|min:3',
            'deskripsi' => 'required',
        ] ,[
            'kategori.required' => 'Kategori tidak boleh kosong',
            'kategori.min' => 'Kategori minimal harus terdiri dari :min karakter',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        ]);

        Kategori::create($request->except(['_token', 'submit']));
        return redirect('/kategori')->with('success', 'Kamu Telah Berhasil Menambahkan Data');
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
        $kategori = Kategori::find($id);
        return view('kategori.edit', compact('kategori'));
        return view('kategori.edit');
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
        $request->validate([
            'kategori' => 'required|min:3',
            'deskripsi' => 'required',
        ] ,[
            'kategori.required' => 'Kategori tidak boleh kosong',
            'kategori.min' => 'Kategori minimal harus terdiri dari :min karakter',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
        ]);

        $kategori = Kategori::find($id);
        $kategori->update($request->except(['_token', 'submit']));
        return redirect('/kategori')->with('success2', 'Kamu Telah Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect('/kategori');
    }
}
