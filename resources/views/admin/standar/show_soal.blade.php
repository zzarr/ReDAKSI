@extends('../admin/layout.app')
@section('content')
<main class="m-4">
    <div class="container-fluid">
        <h4 class="mb-3">Data Pertanyaan {{ $standar->nm_standar }}</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('standar') }}">Standar Akreditasi</a></li>
            <li class="breadcrumb-item active">Data Pertanyaan {{ $standar->nm_standar }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">

                <a type="button" href="{{ route('add_standar') }}" class="btn btn-outline-primary"><i
                        class="fa-solid fa-square-plus"></i></a>



            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Data Soal
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>pertanyaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>pertanyaan</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($standar as $item)
                            <tr>
                                <td>{{ $item->NoSoal }}</td>
                                <td><td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="/admin/edit_standar/" type="button"
                                            class="btn btn-outline-primary"><i class="fa-solid fa-pen"></i></a>
                                        <a href="/admin/hapus_standar/" type="button"
                                            class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                                        <a href="/admin/hapus_standar/" type="button"
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