<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create($id,$id_standar){
        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi');
        $standar = DB::table('StandarAkreditasi')->get();
        return view('admin.Soal.add_soal',compact('id','webtitle','standar','id_standar'));

    }

    public function insert(Request $request, $id_standar){
        $skor = DB::table('StandarAkreditasi')->where('id',$id_standar)->first(['jumlahBobotButir']);
        $skorbtr = $skor->jumlahBobotButir;
        DB::table('SoalAkreditasi')
            ->where('idp', '=', $request->input('id'))
            ->update([
                'pertanyaan' => $request->input('pertanyaan'),
                'A' => $request->input('A'),
                'B' => $request->input('B'),
                'C' => $request->input('C'),
                'D' => $request->input('D'),
                'E' => $request->input('E'),
                'skor_butir' => $skorbtr
            ]);


        return redirect("/admin/show/{$id_standar}");
    }

    
}

