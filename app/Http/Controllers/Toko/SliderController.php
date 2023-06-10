<?php

namespace App\Http\Controllers\Toko;

use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('slider.slider', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'banner' => 'required',
            'nama' => 'required|min:4',
            'url' => 'required|url',
        ], [
            'banner.required' => 'Banner tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama harus terdiri dari minimal :min karakter',
            'url.required' => 'URL tidak boleh kosong',
            'url.url' => 'URL harus berupa URL yang valid',
        ]);

        $slider = Slider::create($request->except(['_token']));

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $slider->banner = $filename;
        }
        $slider->save();

        return redirect('/slider')->with('success', 'Kamu Telah Berhasil Menambahkan Data');
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
        $slider = Slider::find($id);
        return view('slider.edit', compact('slider'));
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
            'url' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama harus terdiri dari minimal :min karakter',
            'url.required' => 'URL tidak boleh kosong',
            'url.url' => 'URL harus berupa URL yang valid',
        ]);

        $slider = Slider::find($id);
        $slider->update($request->except(['_token', 'submit']));

        if ($request->hasFile('banner')) {
            $destination = 'images/' . $slider->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $slider->banner = $filename;
        }

        $slider->update();

        return redirect('/slider')->with('success2', 'Kamu Telah Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect('/slider');
    }
}
