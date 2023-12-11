<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class StandarController extends Controller
{
    public function index(){

        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->get();
        
        return view('admin.standar', compact('webtitle', 'standar'));
    }

    public function create(){
         $webtitle = "Standar Akreditasi";
         

         return view('admin.add_standar',compact('webtitle'));
    }

    public function insert(Request $request){
        $data = [
            'nm_standar' => $request->input('nm_standar'),
            'noSoal' => $request->input('noSoal'),
            'jumlah_soal' =>$request->input('jumlah_soal'),
            'bobot_standar' => $request->input('bobot'),
            'skorMaxSoal' => 4,
            'jumlahBobotButir' => 4 / 5,
            'skorTertimbangMax' => 4 * intval($request->input('jumlah_soal')),
            'created_at' =>  now(),
            'updated_at' => now()
        ];

        DB::table('StandarAkreditasi')->insert($data);


        return redirect()->route('standar');
    }
}
