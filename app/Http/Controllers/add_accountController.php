<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class add_accountController extends Controller
{
    public function create()
    {
        $jabatan = DB::table('jabatan')->get();
        return view('admin/add_account', compact('jabatan'));
    }

    public function addData(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'password' => 'required|string|min:8',
            'leveluser' => 'required|in:admin,user',
            'jabatan' => 'required',
        ]);

        // Gabungkan "First Name" dan "Last Name" menjadi satu string
        $fullName = $request->input('firstname') . ' ' . $request->input('lastname');

        // Menggunakan Query Builder untuk menyimpan data ke database
        DB::table('users')->insert([
            'name' => $fullName,
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'leveluser' => $request->input('leveluser'),
            'id_jabatan' => $request->input('jabatan'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('add_account')->withInput()->with('success', 'Akun berhasil ditambahkan.');
    }
}
