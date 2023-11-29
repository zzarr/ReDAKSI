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
        return view('admin.dashboard');
    }

    public function show(){
        $arsips = DB::table('arsip')->get();
        return view('admin.arsip', compact('arsips'));
    }
}
