<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JawabanController extends Controller
{
    public function soal($id){
        $webtitle = 'Soal';
        $soal = DB::table('SoalAkreditasi')->where('id_standar', $id)->get();
        $standar = DB::table('StandarAkreditasi')->get();
        return view('user.soal.soal', compact('webtitle','soal','standar'));
    }

    public function jawabSoal($idp){
        $webtitle = 'Soal';
        $soal = DB::table('SoalAkreditasi')->where('idp', $idp)->get();
        $standar = DB::table('StandarAkreditasi')->get();
        return view('user.soal.jawab_soal', compact('webtitle', 'soal','standar'));
    }
}
