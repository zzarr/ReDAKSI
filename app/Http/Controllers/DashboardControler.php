<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardControler extends Controller
{
    public function index(){
        $webtitle = 'Dashboard';
        $arsip = DB::table('folders')->get();
        return view('admin.dashboard' ,compact('arsip','webtitle'));
    }
}