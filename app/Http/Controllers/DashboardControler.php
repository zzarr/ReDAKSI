<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardControler extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        $webtitle = 'Dashboard';
        $arsip = DB::table('folders')->get();
        return view('admin.dashboard', compact('arsip', 'webtitle'));
    }

    public function index2()
    {
        $this->middleware('auth');
        $webtitle = 'Dashboard';
        $standar = DB::table('StandarAkreditasi')->get();
        return view('user.dashboard', compact('webtitle', 'standar'));
    }
}
