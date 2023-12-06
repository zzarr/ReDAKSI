<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $webtitle = "Jabatan";
        $arsip = DB::table('folders')->get();
        $jabatan = DB::table('jabatan')->get();

        return view('admin.jabatan', compact('webtitle','arsip','jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         $webtitle = "Jabatan";
        $arsip = DB::table('folders')->get();

        return view('admin.add_jabatan', compact('webtitle','arsip'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jabatan')->insert([
            'id' => $request->input('id'),
            'jabatan' => $request->input('jabatan'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('admin/jabatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        DB::table('jabatan')->where('id', $id)->delete();
        return redirect('admin/jabatan');
    }
}
