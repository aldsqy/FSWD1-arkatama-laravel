<?php

namespace App\Http\Controllers\Toko;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.testimoni', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal harus terdiri dari :min karakter',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'rating.required' => 'Rating tidak boleh kosong',
            'rating.integer' => 'Rating harus berupa angka',
            'rating.min' => 'Rating minimal harus :min',
            'rating.max' => 'Rating maksimal harus :max',
        ]);

        $testimoni = Testimoni::create($request->except(['_token']));
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $testimoni->foto = $filename;
        }
        $testimoni->save();

        return redirect('/testimoni')->with('success', 'Kamu Telah Berhasil Menambahkan Data');
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
        $testimoni = Testimoni::find($id);
        return view('testimoni.edit', compact('testimoni'));
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
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal harus terdiri dari :min karakter',
            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'rating.required' => 'Rating tidak boleh kosong',
            'rating.integer' => 'Rating harus berupa angka',
            'rating.min' => 'Rating minimal harus :min',
            'rating.max' => 'Rating maksimal harus :max',
        ]);

        $testimoni = Testimoni::find($id);
        $testimoni->update($request->except(['_token', 'submit']));
        if ($request->hasFile('foto')) {
            $destination = 'images/' . $testimoni->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $testimoni->foto = $filename;
        }

        $testimoni->update();

        return redirect('/testimoni')->with('success2', 'Kamu Telah Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        return redirect('/testimoni');
    }
}
