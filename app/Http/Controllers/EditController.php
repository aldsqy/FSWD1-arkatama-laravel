<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');

        // Update the user data in the database using the provided form inputs
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'role' => $request->input('role'),
                'address' => $request->input('address'),
            ]);

        // Redirect back to the index page after updating
        return redirect('index');
    }
}
