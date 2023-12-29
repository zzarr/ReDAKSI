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

    public function show($id){
        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->where('id','=', $id)->first(['nm_standar']);
        $soal = DB::table('StandarAkreditasi')
                    ->rightJoin('SoalAkreditasi', 'StandarAkreditasi.id', '=', 'SoalAkreditasi.id_standar')
                    ->where('SoalAkreditasi.id_standar', '=', $id)
                    ->get();

        $id_standar = $id;
        return view('admin.standar.show_soal', compact('webtitle','id_standar','soal','standar'));
    }

    public function create(){
         $webtitle = "Standar Akreditasi";
         $jml = DB::table('StandarAkreditasi')->sum('bobot_standar');
         $max = 100 - $jml;
         return view('admin.standar.add_standar',compact('webtitle', 'max'));
    }

    public function insert(Request $request){
        $jml = DB::table('StandarAkreditasi')->count('*');
        if($jml >= 1){
            $id = $jml+1;
        }
        else{
            $id = 1;
        }

        $noSoal = 0;
        if($id>1){
            $noSoalsebelum = DB::table('StandarAkreditasi')->where('id', $id-1)->first(['NoSoal']);
            $jmlsebelum = DB::table('StandarAkreditasi')->where('id', $id-1)->first(['jumlah_soal']);
            $noSoal = $noSoalsebelum->NoSoal + $jmlsebelum->jumlah_soal;
        }
        else{
            $noSoal = 1;
        }
        

        $data = [
            'id' => $id,
            'nm_standar' => $request->input('nm_standar'),
            'noSoal' => $noSoal,
            'jumlah_soal' =>$request->input('jumlah_soal'),
            'bobot_standar' => $request->input('bobot'),
            'skorMaxSoal' => 4,
            'jumlahBobotButir' => intval($request->input('bobot')) / intval($request->input('jumlah_soal')),
            'skorTertimbangMax' => 4 * intval($request->input('jumlah_soal')) * (intval($request->input('bobot')) / intval($request->input('jumlah_soal'))),
            'created_at' =>  now(),
            'updated_at' => now()
        ];

        DB::table('StandarAkreditasi')->insert($data);

        $i = $noSoal;
        $NoSoal = array();
        $j = 0;
    
        while ($j < intval($request->input('jumlah_soal')) ) {
            $NoSoal[] = $i;
            $i++;
            $j++;

        }

        foreach($NoSoal as $no){
            DB::table('SoalAkreditasi')->insert([
                'idp' => $no,
                'id_standar' => $id
            ]);
        }

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
        DB::table('SoalAkreditasi')->where('id_standar',$id)->delete();
        DB::table('StandarAkreditasi')->where('id', $id)->delete();
       

        return redirect()->route('standar');
    }
}     
