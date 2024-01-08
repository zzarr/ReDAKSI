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
        return view('admin.dashboard', compact('arsip', 'webtitle', 'akun', 'standar'));
    }

    public function index2()
    {
        $this->middleware('auth');
        $webtitle = 'Dashboard';
        $standar = DB::table('StandarAkreditasi')->get();
        $jmlstandar = DB::table('StandarAkreditasi')->count();
        $jmlsoal = DB::table('SoalAkreditasi')->count();
        $jmljwb = DB::table('JawabanAkreditasi')->count();

        $jmldok = array();
        $i=1;
        while($i <= $jmlstandar ){
             $jmldok[] = DB::table('fileArsip')->where('id_standar',$i)->count();
             $i++;
        }
        
        $kesiapan = ($jmljwb / $jmlsoal) * 100;
        return view('koordinator_guru.dashboard', compact('webtitle', 'standar', 'kesiapan','jmldok'));
    }

    public function index3()
    {
        $webtitle = 'Dashboard';
        return view('guru.dashboard', compact('webtitle'));
    }
}
