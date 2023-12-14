<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create($id){
        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi');
        return view('admin.Soal.add_soal',compact('id','webtitle','satndar'));

    }
}
