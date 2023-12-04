<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function getData_login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $userData = DB::table('users')->select('username', 'password', 'leveluser')->where(
            'username',
            $request->input('username')
        )->first();

        if ($userData) {
            // Jika data pengguna ditemukan
            if (password_verify($request->input('password'), $userData->password)) {
                // Password cocok, lakukan redirect atau tindakan sesuai dengan user role
                if ($userData->leveluser == 'admin') {
                    return redirect()->route('admin.dashboard')->withInput();
                } elseif ($userData->leveluser == 'user') {
                    return redirect()->route('user.dashboard')->withInput();
                }
            } else {
                // Password tidak cocok
                return redirect()->route('login')->withInput()->withErrors(['gagal' => 'password tidak cocok.']);
            }
        } else {
            return redirect()->route('login')->withInput()->withErrors(['gagal' => 'username tidak cocok.']);
        }
    }
}


/* $userData = DB::table('users')
    ->select('username', 'password')
    ->where('username', $request->input('username'))
    ->first();

if ($userData) {
    // Jika data pengguna ditemukan
    if (password_verify($request->input('password'), $userData->password)) {
        // Password cocok, lakukan redirect atau tindakan sesuai dengan user role

        // Ambil informasi tambahan setelah login berhasil
        $userInfo = DB::table('users')
            ->select('leveluser')
            ->where('username', $userData->username)
            ->first();

        if ($userInfo->leveluser == 'admin') {
            return redirect()->route('admin.dashboard')->withInput();
        } elseif ($userInfo->leveluser == 'user') {
            return redirect()->route('user.dashboard')->withInput();
        }
    } else {
        // Password tidak cocok
        return redirect()->route('login')->withInput()->withErrors(['gagal' => 'Password tidak cocok.']);
    }
} else {
    return redirect()->route('login')->withInput()->withErrors(['gagal' => 'Username tidak cocok.']);
 */