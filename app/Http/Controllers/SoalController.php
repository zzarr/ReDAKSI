<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create($id){
        $webtitle = "Standar Akreditasi";
        return view('admin.Soal.add_soal',compact('id','webtitle'));

    }
}
