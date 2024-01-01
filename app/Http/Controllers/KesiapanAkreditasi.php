<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KesiapanAkreditasi extends Controller
{
    public function index(){
        $webtitle = "Kesiapan Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->get();
        $jmlStandar = DB::table('standarAkreditasi')->count('id');
        $skorTertimbangTotal = 0;

        foreach($standar as $item){
            $skorTertimbangTotal += ($item->skorPerolehan * $item->jumlahBobotButir);
        }

    

        $NA = ($skorTertimbangTotal / 400)*100;
        $index = '';
        if($NA>=80){
            $index = 'A';
        }
        elseif($NA>=60 && $NA<80){
            $index = 'B';
        }
        elseif($NA<60){
            $index = 'C';
        }

        
        return view("user.Kesiapan.kesiapan", compact("standar","webtitle", "skorTertimbangTotal", "NA","index"));

    }
}
