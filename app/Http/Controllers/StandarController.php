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
        
        return view('admin.standar.standar', compact('webtitle', 'standar'));
    }

    public function create(){
         $webtitle = "Standar Akreditasi";
         

         return view('admin.standar.add_standar',compact('webtitle'));
    }

    public function insert(Request $request){
        $data = [
            'nm_standar' => $request->input('nm_standar'),
            'noSoal' => $request->input('noSoal'),
            'jumlah_soal' =>$request->input('jumlah_soal'),
            'bobot_standar' => $request->input('bobot'),
            'skorMaxSoal' => 4,
            'jumlahBobotButir' => intval($request->input('bobot')) / intval($request->input('jumlah_soal')),
            'skorTertimbangMax' => 4 * intval($request->input('jumlah_soal')) * (intval($request->input('bobot')) / intval($request->input('jumlah_soal'))),
            'created_at' =>  now(),
            'updated_at' => now()
        ];

        DB::table('StandarAkreditasi')->insert($data);


        return redirect()->route('standar');
    }

    public function edit($id){
        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->where('id', $id)->get();
        return view('admin.standar.edit_standar', compact('webtitle', 'standar'));
    }

    public function update(Request $request,string $id){
        DB::table('StandarAkreditasi')->where('id', $id)->update([
            'nm_standar' => $request->input('nm_standar'),
            'noSoal' => $request->input('noSoal'),
            'jumlah_soal' =>$request->input('jumlah_soal'),
            'bobot_standar' => $request->input('bobot'),
            'updated_at' => now()
        ]);

        return redirect()->route('standar');
    }

    public function delete($id){
        DB::table('StandarAkreditasi')->where('id', $id)->delete();

        return redirect()->route('standar');
    }
}
