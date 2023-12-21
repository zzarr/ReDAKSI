@extends('../admin/layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Data Soal {{ $nama = $standar->nm_standar }}</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('standar') }}">Standar Akreditasi</a> </li>
                <li class="breadcrumb-item active">{{ $nama = $standar->nm_standar }}</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    Data Soal
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Tambah</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Tambah</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($soal as $item)
                                <tr>
                                    <td>{{ $item->idp }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12">{{ $item->pertanyaan }}</div>
                                            @if (isset($item->pertanyaan))
                                                <div class="col-12">A. {{ $item->A }}</div>
                                                <div class="col-12">B. {{ $item->B }}</div>
                                                <div class="col-12">C. {{ $item->C }}</div>
                                                <div class="col-12">D. {{ $item->D }}</div>
                                                <div class="col-12">E. {{ $item->E }}</div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <a href="/admin/tambah_soal/{{ $item->idp }}/{{ $id_standar }}"
                                            type="button" class="btn btn-outline-primary"><i
                                                class="fa-solid fa-pen"></i></a>
                                    </td>
                                    <td>
                                        <a href="/admin/edit_soal/{{ $item->idp }}/{{ $id_standar }}" type="button"
                                            class="btn btn-outline-secondary"><i class="fa-solid fa-gear"></i></a>
                                    </td>
                                    <td>
                                        <a href="/admin/hapus_soal/{{ $item->idp }}/{{ $id_standar }}" type="button"
                                            class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
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
