<?php

namespace App\Http\Controllers\Toko;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengguna = Pengguna::all();
        return view('pengguna.pengguna',compact('pengguna'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pengguna.create');

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
            'avatar' => 'required',
            'email' => 'required',
            'nama' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::create($request->except(['_token']));
        $pengguna->setAttribute('password', bcrypt($request->password));
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $pengguna->avatar = $filename;
        }
        $pengguna->save();

        return redirect('/pengguna')->with('success', 'Kamu Telah Berhasil Menambahkan Data');

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

        $pengguna = Pengguna::find($id);
        return view('pengguna.edit', compact('pengguna'));
        return view('pengguna.edit');

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
            'email' => 'required',
            'nama' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required',
        ]);

        $pengguna = Pengguna::find($id);
        $pengguna->update($request->except(['_token', 'submit']));
        $pengguna->setAttribute('password', bcrypt($request->password));
        if ($request->hasFile('avatar')) {
            $destination = 'images/' . $pengguna->avatar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $pengguna->avatar = $filename;
        }

        $pengguna->update();

        return redirect('/pengguna')->with('success2', 'Kamu Telah Berhasil Memperbarui Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect('/pengguna');

    }
}
