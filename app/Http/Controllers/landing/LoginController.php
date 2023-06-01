<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('landing.login');
    }

    public function register()
    {
        return view('landing.register');
    }

    public function store(Request $request)
    {
        $pengguna = Pengguna::create($request->except(['_token']));
        $pengguna->setAttribute('password', bcrypt($request->password));
        $pengguna->save();
        return redirect('/login');
    }

    public function proses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('landingpage');
        }

        return back()->with('error', 'Maaf, Kamu Gagal Login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Kamu Telah Berhasil Logout');
    }


}


