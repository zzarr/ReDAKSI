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

                    <a type="button" href="{{ route('add_folder') }}" class="btn btn-outline-primary"><i
                            class="fa-solid fa-folder-plus"></i></a>



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
                                <th>Nama Folder</th>
                                <th>Hak Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Arsip</th>
                                <th>Hak Akses</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($folders as $item)
                                <tr>

                                    <td>{{ $item->nama_folder }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>
                                        <a type="button" class="btn btn-primary" href="/admin/edit/{{ $item->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a type="button" class="btn btn-danger" href="/admin/hapus/{{ $item->id }}"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
