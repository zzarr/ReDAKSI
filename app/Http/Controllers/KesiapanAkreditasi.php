<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KesiapanAkreditasi extends Controller
{
    public function index(){
        $standar = DB::table('StandarAkreditasi')->get();
        $jmlStandar = DB::table('standarAkreditasi')->count('id');
        $nilaiSatuan = array();
        $i = 0;
        while($i< $jmlStandar){
            $nilaiSatuan = $standar->skorTertimbangMax 

        }

    }
}
