<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;

class accountController extends Controller
{
    public function index()
    {
        $akun = DB::table('users')->join('jabatan', 'id_jabatan', '=', 'jabatan.id')->get();
        $webtitle = 'Dashboard';
        $arsip = DB::table('folders')->get();
        return view('admin.account', compact('akun', 'webtitle', 'arsip'));
    }

    public function create()
    {
        $webtitle = 'Dashboard';
        $jabatan = DB::table('jabatan')->get();
        $arsip = DB::table('folders')->get();
        return view('admin/add_account', compact('jabatan', 'webtitle', 'arsip'));
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

        return redirect()->route('account')->withInput()->with('success', 'Akun berhasil ditambahkan.');
    }
}
