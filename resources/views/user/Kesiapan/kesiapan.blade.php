@extends('user.layout.app')
@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Kesiapan Standar Akreditasi</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="/admin/">Dashboard</a></li>
                <li class="breadcrumb-item active">Kesiapan Standar</li>
            </ol>
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Standar Akreditasi</th>
                                    <th scope="col">Skor Tertimbang Maksimal</th>
                                    <th scope="col">Skor Perolehan</th>
                                    <th scope="col">Skor Tertimbang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($standar as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nm_standar }}</td>
                                        <td>{{ $item->skorTertimbangMax }}</td>
                                        <td>{{ $item->skorPerolehan }}</td>
                                        <td>{{ $skorTertimbang = $item->skorPerolehan * $item->jumlahBobotButir }}</td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                    <hr class="my-2">
                    <table class="table-bordered table">
                        <tbody>
                            <tr>
                                <td>Jumlah Skor tertimbang</td>
                                <td>{{ $skorTertimbangTotal }}</td>
                            </tr>
                            <tr>
                                <td>Nilai Akhir(NA)</td>
                                <td>{{ $NA }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr class="my-4">
                    <p> Hasil Akreditasi Sekolah SMP MKGR Nilai AKhir sama dengan {{ $NA }}. maka sekolah ini
                        dinyatakan dengan predikat {{ $index }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
