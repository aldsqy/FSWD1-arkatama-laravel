<?php

namespace App\Http\Controllers\Toko;

use App\Models\Produk;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class Produk1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('Produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('produk.create', compact('kategori'));
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
            'nama' => 'required|min:4',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama harus terdiri dari minimal :min karakter',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.numeric' => 'Harga harus berupa angka',
            'kategori_id.required' => 'Kategori ID tidak boleh kosong',
            'kategori_id.exists' => 'Kategori ID tidak valid',
        ]);

        $produk = Produk::create($request->except(['_token']));
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->save();

        return redirect('/produks')->with('success', 'Kamu Telah Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        return view('landing.project-details', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk', 'kategori'));
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
            'nama' => 'required|min:4',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori_id' => 'required|exists:kategori,id',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama harus terdiri dari minimal :min karakter',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'harga.numeric' => 'Harga harus berupa angka',
            'kategori_id.required' => 'Kategori ID tidak boleh kosong',
            'kategori_id.exists' => 'Kategori ID tidak valid',
        ]);

        $produk = Produk::find($id);
        $produk->update($request->except(['_token', 'submit']));
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $produk->gambar = $filename;
        }
        $produk->update();

        return redirect('/produks')->with('success2', 'Kamu Telah Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $filePath = public_path('images/' . $produk->gambar);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $produk->delete();
        return redirect('/produks');
    }
}
