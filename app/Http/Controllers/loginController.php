<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        $webtitle = 'Login';
        return view('login', compact('webtitle'));
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
                    return redirect()->route('dashboard')->withInput();
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
