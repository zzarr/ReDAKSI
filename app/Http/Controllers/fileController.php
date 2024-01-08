<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $get_file = DB::table('filearsip')
            ->leftJoin('formatfile', 'id_format', '=', 'formatfile.id')
            ->leftJoin('standarakreditasi', 'id_standar', '=', 'standarakreditasi.id')
            ->select('filearsip.*', 'formatfile.jenis_file as formatfile', 'standarakreditasi.nm_standar as standarakreditasi')
            //->select('filearsip.*', 'standarakreditasi.nm_standar as standarakreditas', 'soalakreditasi.pertanyaan as soalakreditasi')
            ->get();
        $format = DB::table('standarakreditasi')->get();
        $webtitle = 'ReDAKSI | File Arsip';
        return view('guru.file', compact('webtitle', 'get_file', 'format'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $webtitle = 'ReDAKSI | File Arsip';
        $standar = DB::table('standarakreditasi')->get();
        //$soal = DB::table('soalakreditasi')->get();
        return view('guru.add_file', compact('webtitle', 'standar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'standar' => 'required',
            'file-upload' => 'required|mimes:docx,pdf,xlsx|max:1024',
        ]);

        $file = $request->file('file-upload');

        // Mendapatkan nama dan ekstensi file
        $namaFile = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $jenisFile = $file->getClientOriginalExtension();

        $format = DB::table('formatfile')
            ->where('jenis_file', $jenisFile)
            ->value('id');

        Storage::disk('public')->put('filearsip/' . $namaFile . '.' . $jenisFile, file_get_contents($file));

        DB::table('filearsip')->insert([
            'id_standar' => $request->input('standar'),
            'nama_file' => $namaFile,
            'id_format' => $format,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('guru/file')
            ->withInput()
            ->with('success', 'Akun berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $webtitle = "Dokumen Akreditasi";
        $standar = DB::table('StandarAkreditasi')->get();
        $judul = DB::table('StandarAkreditasi')
            ->where('id', $id)
            ->first(['nm_standar']);
        $dokumen = DB::table('fileArsip')->where('id_standar', $id)->leftJoin('formatfile', 'id_format', '=', 'formatfile.id')->get();

        return view('koordinator_guru.dokumen.dokumen', compact('webtitle','standar','dokumen','judul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $webtitle = 'ReDAKSI | File Arsip';
        $standar = DB::table('standarakreditasi')->get();
        //$soal = DB::table('soalakreditasi')->get();
        $file = DB::table('filearsip')
            ->where('id', $id)
            ->first();

        if ($file) {
            return view('guru.edit_file', compact('webtitle', 'standar', 'file'));
        } else {
            // Handle jika file tidak ditemukan, misalnya dengan redirect atau menampilkan pesan
            return redirect('guru/file');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'standar' => 'nullable',
            'file-upload' => 'nullable|mimes:docx,pdf,xlsx|max:1024',
        ]);

        if ($request->hasFile('file-upload')) {
            // Access file properties only if a file has been uploaded
            $file = $request->file('file-upload');

            // Mendapatkan nama dan ekstensi file
            $namaFile = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $jenisFile = $file->getClientOriginalExtension();

            $format = DB::table('formatfile')
                ->where('jenis_file', $jenisFile)
                ->value('id');

            Storage::disk('public')->put('filearsip/' . $namaFile . '.' . $jenisFile, file_get_contents($file));
            if ($request->filled('standar')) {
                DB::table('filearsip')
                    ->where('id', $id)
                    ->update([
                        'id_standar' => $request->input('standar'),
                        'nama_file' => $namaFile,
                        'id_format' => $format,
                        'updated_at' => now(),
                    ]);
            } else {
                DB::table('filearsip')
                    ->where('id', $id)
                    ->update([
                        'nama_file' => $namaFile,
                        'id_format' => $format,
                        'updated_at' => now(),
                    ]);
            }

            return redirect('guru/file')
                ->withInput()
                ->with('success', 'file berhasil diupdate.');
        } else {
            DB::table('filearsip')
                ->where('id', $id)
                ->update([
                    'id_standar' => $request->input('standar'),
                    'updated_at' => now(),
                ]);

            return redirect('guru/file')
                ->withInput()
                ->with('success', 'file berhasil diupdate.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('filearsip')
            ->where('id', $id)
            ->delete();

        return redirect('guru/file');
    }

    public function download($id)
    {
        $file = DB::table('filearsip')
            ->select('id_format')
            ->where('id', $id)
            ->get();

        if ($file) {
            $filePath = $file->path;
            $name = null; // You can set a custom name if needed
            $headers = [
                'Content-Type' => 'application/octet-stream',
            ];

            return Storage::download($filePath, $name, $headers);
        } else {
            // Handle if file not found
            return response()->json(['error' => 'File not found.'], 404);
        }
    }
}
