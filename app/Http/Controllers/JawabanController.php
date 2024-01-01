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


    public function simpanJwb(Request $request){
        $jwbNscore = explode('|', $request->input('jawaban'));
        $jawaban = $jwbNscore[0];
        $score = $jwbNscore[1];

        DB::table('JawabanAkreditasi')->insert([
            'id_pertanyaan' => $request->input('id_pertanyaan'),
            'id_standar' => $request->input('id_standar'),
            'jawaban' => $jawaban,
            'score' => $score 
        ]);

        $skorperolehan = DB::table('JawabanAkreditasi')
                            ->where('id_standar',$request->input('id_standar'))
                            ->sum('score');
        
        $bobotbtr = DB::table('StandarAkreditasi')
                 ->where('id',$request->input('id_standar'))
                 ->first(['jumlahBobotButir']);

        DB::table('StandarAkreditasi')->where('id',$request->input('id_standar'))->update([
            'skorPerolehan' => $skorperolehan,
            'nilaiPerStandar' => $skorperolehan * $bobotbtr->jumlahBobotButir
        ]);

        return redirect("/user/soal/{$request->input('id_standar')}");

    }

    public function show($id){
        $webtitle = 'Jawaban';
        $jawaban = DB::table('JawabanAkreditasi')->where('id_standar', $id)->get();
        $standar = DB::table('StandarAkreditasi')->get();

        return view('user.jawaban.jawaban', compact('jawaban','webtitle','standar'));
    }
}
