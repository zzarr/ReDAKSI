@extends('user.layout.app')
@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Jawaban Standar Akreditasi: {{ $judul->nm_standar }}</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                <li class="breadcrumb-item active">Jawaban</li>
            </ol>
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No Soal</th>
                                <th>Jawaban</th>
                                <th>Score</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jawaban as $item)
                                <tr>
                                    <td>{{ $item->id_pertanyaan }}</td>
                                    <td>{{ $item->jawaban }}</td>
                                    <td>{{ $item->score }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
@endsection
