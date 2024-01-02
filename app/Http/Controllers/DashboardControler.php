<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardControler extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        $webtitle = 'Dashboard';
        $arsip = DB::table('folders')->get();
        $akun = DB::table('users')->count();
        $standar = DB::table('StandarAkreditasi')->count();
        return view('admin.dashboard', compact('arsip', 'webtitle','akun', 'standar'));
    }

    public function index2()
    {
        $this->middleware('auth');
        $webtitle = 'Dashboard';
        $standar = DB::table('StandarAkreditasi')->get();
        $jmlsoal = DB::table('SoalAkreditasi')->count();
        $jmljwb = DB::table('JawabanAkreditasi')->count();
        $kesiapan = ($jmljwb/$jmlsoal)*100;
        return view('user.dashboard', compact('webtitle', 'standar','kesiapan'));
    }

    public function index3(){
        $webtitle = 'Dashboard';
        return view('guru.dashboar', compact('webtitle'));
    }
}
