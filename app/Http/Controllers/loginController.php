<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        $webtitle = 'ReDAKSI | Login';
        return view('login', compact('webtitle'));
    }
    public function getData_login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string',
        ]);

        $userData = DB::table('users')
            ->select('username', 'password', 'leveluser')
            ->whereRaw('BINARY username = ?', $request->input('username'))
            ->first();

        if ($userData) {
            // Jika data pengguna ditemukan
            if (password_verify($request->input('password'), $userData->password)) {
                // Password cocok, lakukan redirect atau tindakan sesuai dengan user role
                if ($userData->leveluser == 'admin') {
                    if (Auth::guard('admin')->attempt(['username' => $userData->username, 'password' => $credentials['password']])) {
                        $request->session()->regenerate();
                        return redirect()
                            ->route('DashboardAdmin')
                            ->withInput();
                    }
                } elseif ($userData->leveluser == 'user') {
                    if (Auth::guard('user')->attempt(['username' => $userData->username, 'password' => $credentials['password']])) {
                        $request->session()->regenerate();
                        return redirect()
                            ->route('user.dashboard')
                            ->withInput();
                    }
                }
            } else {
                // Password tidak cocok
                return redirect()
                    ->route('login')
                    ->withInput()
                    ->withErrors(['gagal' => 'password tidak cocok.']);
            }
        } else {
            return redirect()
                ->route('login')
                ->withInput()
                ->withErrors(['gagal' => 'username tidak cocok.']);
        }
    }
}
