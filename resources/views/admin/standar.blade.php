@extends('admin.layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Standar Akreditasi</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Satndar Akreditasi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">

                    <a type="button" href="{{ url('admin/jabatan/create') }}" class="btn btn-outline-primary"><i
                            class="fa-solid fa-square-plus"></i></a>



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
                                <th>Nama Standar</th>
                                <th>No Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Bobot Standar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Standar</th>
                                <th>No Soal</th>
                                <th>Jumlah Soal</th>
                                <th>Bobot Standar</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($standar as $item)
                                <td>{{ $item->nm_standar }}</td>
                                <td>{{ $item->nosoal }}</td>
                                <td>{{ $item->Jumlah_soal }}</td>
                                <td>{{ $item->bobot_standar }}</td>
                                <td></td>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
