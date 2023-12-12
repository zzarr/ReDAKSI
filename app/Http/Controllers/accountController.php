<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Encryption\DecryptException;
use PhpParser\Node\Expr\Cast\String_;

class accountController extends Controller
{
    public function index()
    {
        //$akun = DB::table('users')->join('jabatan', 'id_jabatan', '=', 'jabatan.id')->get();
        $akun = DB::table('users')
            ->leftJoin('jabatan', 'id_jabatan', '=', 'jabatan.id')
            ->select('users.*', 'jabatan') // Adjust the column names accordingly
            ->get();
        $webtitle = 'Accoun';
        $arsip = DB::table('folders')->get();
        return view('admin.account', compact('akun', 'webtitle', 'arsip'));
    }

    public function create()
    {
        $webtitle = 'Add_Account';
        $jabatan = DB::table('jabatan')->get();
        $arsip = DB::table('folders')->get();
        return view('admin.add_account', compact('jabatan', 'webtitle', 'arsip'));
    }

    public function update($iduser)
    {
        $webtitle = 'update_Account';
        $jabatan = DB::table('jabatan')->get();
        $arsip = DB::table('folders')->get();
        $akun = DB::table('users')->where('id', $iduser)->first();
        return view('admin.update_account', compact('jabatan', 'webtitle', 'arsip', 'akun'));
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

    public function updateData(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'username' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'password' => 'nullable|string|min:8',
            'leveluser' => 'nullable|in:admin,user',
            'jabatan' => 'nullable',
        ]);

        // Menggunakan Query Builder untuk mengupdate data ke database
        DB::table('users')->where('id', $request->id)->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'leveluser' => $request->input('leveluser'),
            'id_jabatan' => $request->input('jabatan'),
            'updated_at' => now(),
        ]);

        return redirect()->route('account')->withInput()->with('success', 'Akun berhasil diupdate.');
    }

    public function delete($iduser)
    {
        // Lakukan operasi delete data pengguna berdasarkan ID
        DB::table('users')->where('id', $iduser)->delete();

        return redirect()->route('account')->with('success', 'Akun berhasil dihapus.');
    }
}
