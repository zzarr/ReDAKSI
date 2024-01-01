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
            ->select('id', 'username', 'password', 'leveluser')
            ->whereRaw('BINARY username = ?', $request->input('username'))
            ->first();

        if ($userData) {
            // Jika data pengguna ditemukan
            if (password_verify(strval($request->input('password')), $userData->password)) {
                // Password cocok, lakukan redirect atau tindakan sesuai dengan user role
                if ($userData->leveluser == 'admin') {
                    if (Auth::guard('admin')->attempt(['username' => $userData->username, 'password' => $credentials['password']])) {
                        // Mengatur sesi pengguna dengan level 'admin'
                        $request->session()->put('admin', ['id' => $userData->id, 'expires_at' => now()->addDay()]);

                        // Mengambil waktu kadaluarsa sesi dari sesi 'admin'
                        $expiresAt = $request->session()->get('admin.expires_at');

                        // Mengambil waktu saat ini
                        $currentTime = now();

                        // Menghitung selisih menit antara waktu kadaluarsa dan waktu saat ini
                        $minutesRemaining = $currentTime->diffInMinutes($expiresAt);

                        return redirect()
                            ->route('DashboardAdmin')
                            ->withInput();
                    }
                } elseif ($userData->leveluser == 'user') {
                    if (Auth::guard('user')->attempt(['username' => $userData->username, 'password' => $credentials['password']])) {
                        // Mengatur sesi pengguna dengan level 'user'
                        $request->session()->put('user', ['id' => $userData->id, 'expires_at' => now()->addDay()]);

                        // Mengambil waktu kadaluarsa sesi dari sesi 'admin'
                        $expiresAt = $request->session()->get('user.expires_at');

                        // Mengambil waktu saat ini
                        $currentTime = now();

                        // Menghitung selisih menit antara waktu kadaluarsa dan waktu saat ini
                        $minutesRemaining = $currentTime->diffInMinutes($expiresAt);

                        return redirect()
                            ->route('DashboardUser')
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
