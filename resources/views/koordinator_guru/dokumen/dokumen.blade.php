@extends('koordinator_guru.layout.app')
@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Dokumen {{ $judul->nm_standar }}</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('standar') }}">Standar Akreditasi</a> </li>
                <li class="breadcrumb-item active">Dokumen {{ $judul->nm_standar }}</li>
            </ol>
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama File</th>
                                <th>Jenis File</th>
                                <th>Dibuat</th>
                                <th>Diupdate</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($dokumen as $item)
                                <tr>
                                    <td>{{ $item->nama_file }}</td>
                                    <td>{{ $item->jenis_file }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        {{ $item->updated_at }}
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
