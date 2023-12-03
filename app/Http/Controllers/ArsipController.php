<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webtitle = "Arsip";
        $folders = DB::table('folders')->join('jabatan', 'hak_akses','=','jabatan.id')->get();
        return view('admin.arsip', compact('folders', 'webtitle'));
    }

    public function add_arsip()
    {
        $jabatan = DB::table('jabatan')->get();
        return view('admin.add_folder', compact('jabatan'));
    }
}
