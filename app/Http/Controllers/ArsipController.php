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
        $folderss = DB::table('folders')->get();
        return view('admin.arsip', compact('folders'));
    }

    public function show(){
       
    }
}
