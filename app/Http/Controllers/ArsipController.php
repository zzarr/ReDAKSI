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
        $arsip = DB::table('folders')->get();
        $folders = DB::table('folders')
                    ->leftJoin('jabatan', 'folders.hak_akses', '=', 'jabatan.id')
                    ->select('folders.*', 'jabatan.jabatan as jabatan') // Adjust the column names accordingly
                    ->get();


        return view('admin.arsip', compact('folders', 'webtitle','arsip'));
    }

    public function add_arsip()
    {
        $webtitle = "Arsip";
        $arsip = DB::table('folders')->get();
        $jabatan = DB::table('jabatan')->get();
        return view('admin.add_folder', compact('jabatan','arsip','webtitle'));
    }

    public function tambah_arsip(Request $request){
        DB::table('folders')->insert([
            'id' => rand(1,100000000),
            'nama_folder' => $request->input('arsip'),
            'hak_Akses' => $request->input('hak_akses'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('folder');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        $webtitle = "Arsip";
        $arsip = DB::table('folders')->get();
        $jabatan = DB::table('jabatan')->get();
        // mengambil data pegawai berdasarkan id yang dipilih
        $folders = DB::table('folders')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.edit_folder',compact('folders','webtitle','arsip','jabatan'));
    }

    public function hapus_arsip($id){
       
        DB::table('folders')->where('id', $id)->delete();
        return redirect()->route('folder');
    }
}
