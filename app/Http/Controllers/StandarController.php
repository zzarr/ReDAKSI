<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StandarController extends Controller
{
    public function index(){

        $webtitle = "Standar Akreditasi";
        $standar = DB::table('StandarAkreditasi')->get();
        
        return view('admin.standar', compact('webtitle', 'standar'));
    }
}
