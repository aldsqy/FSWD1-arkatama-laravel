<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('index', compact('users'));
    }
}
