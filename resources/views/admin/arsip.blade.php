@extends('admin.layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Arsip</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Arsip</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-outline-primary"><i
                                class="fa-solid fa-folder-plus"></i></button>
                        <button type="button" class="btn btn-outline-danger"></button>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Arsip
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Arsip</th>
                                <th>Hak Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Arsip</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                @foreach ($arsips as $arsip)
                                    <td>{{ $arsip->nama_arsip }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        <button type="button" class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </td>
                                @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
