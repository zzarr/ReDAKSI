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
            'Username' => 'required|string|max:255',
            'Password' => 'required|string|min:8',
        ]);

        $userData = DB::table('user')->select('username', 'password', 'leveluser')->where([
            'username' => $request->input('Username'),
        ])->first();

        if ($userData) {
            // Jika data pengguna ditemukan
            if (password_verify($request->input('Password'), $userData->password)) {
                // Password cocok, lakukan redirect atau tindakan sesuai dengan user role
                if ($userData->leveluser == 'admin') {
                    return redirect()->route('admin.dashboard');
                } elseif ($userData->leveluser == 'user') {
                    return redirect()->route('user.dashboard');
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
