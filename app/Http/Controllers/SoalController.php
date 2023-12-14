<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create($id){
        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->get();
        return view('admin.Soal.add_soal',compact('id','webtitle','standar'));

    }

    public function insert(Request $request){
        $skor = DB::table('StandarAkreditasi')->where('id',$request->input('id'))->first(['jumlahBobotButir']);
        $skorbtr = $skor->jumlahBobotButir;
        DB::table('SoalAkreditasi')->insert([
            'idp'           => intval($request->input('id')),
            'id_standar'    => $request->input('standar'),
            'pertanyaan'    => $request->input('pertanyaan'),
            'A'             => $request->input('A'),
            'B'             => $request->input('B'),
            'C'             => $request->input('C'),
            'D'             => $request->input('D'),
            'E'             => $request->input('E'),
            'skor_butir'    => $skorbtr
        ]);

        return redirect("/admin/show/{$request->input('standar')}");
    }

    
}
