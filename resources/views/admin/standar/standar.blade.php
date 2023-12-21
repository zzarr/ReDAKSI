@extends('../admin/layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Standar Akreditasi</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Stanndar Akreditasi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">

                    <a type="button" href="{{ route('add_standar') }}" class="btn btn-outline-primary"><i
                            class="fa-solid fa-square-plus"></i> Tambah Standar</a>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Standar Akreditasi
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Standar</th>
                                <th>No Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Bobot Standar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Standar</th>
                                <th>No Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Bobot Standar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($standar as $item)
                                <tr>

                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nm_standar }}</td>
                                    <td>{{ $item->NoSoal }}</td>
                                    <td>{{ $item->jumlah_soal }}</td>
                                    <td>{{ $item->bobot_standar }}</td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="/admin/edit_standar/{{ $item->id }}" type="button"
                                                class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i></a>
                                            <a href="/admin/hapus_standar/{{ $item->id }}" type="button"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                            <a href="/admin/show/{{ $item->id }}" type="button"
                                                class="btn btn-outline-info"><i class="fa-solid fa-eye"></i></a>
                                        </div>
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
