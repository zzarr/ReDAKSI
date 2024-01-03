@extends('user.layout.app')
@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Soal {{ $judul->nm_standar }}</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('standar') }}">Standar Akreditasi</a> </li>
                <li class="breadcrumb-item active">Soal {{ $judul->nm_standar }}</li>
            </ol>
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Jawab</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Soal</th>
                                <th>Jawab</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($soal as $item)
                                <tr>
                                    <td>{{ $item->idp }}</td>
                                    <td>{{ $item->pertanyaan }}</td>
                                    <td>
                                        @if (@isset($item->pertanyaan))
                                            <a href="/user/jawab_soal/{{ $item->idp }}"
                                                class="btn btn-secondary">Jawab</a>
                                        @endif

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
