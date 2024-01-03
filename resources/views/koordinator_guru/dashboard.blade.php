@extends('koordinator_guru.layout.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    kesiapan Akreditasi
                </div>
                <div class="card-body">
                    <p class="h2">{{ $kesiapan }} %</p>
                    <div class="progress" role="progressbar" aria-label="Example with label"
                        aria-valuenow="{{ $kesiapan }}" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: {{ $kesiapan }}%">{{ $kesiapan }}%</div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($standar as $item)
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">{{ $item->nm_standar }}</div>
                            <div class="card-body">
                                <p>Skor tertimbang
                                    <b>{{ $skorTertimbang = $item->skorPerolehan * $item->jumlahBobotButir }}</b>
                                </p>
                            </div>
                        </div>


                    </div>
                @endforeach

                <div class="col-xl-6">

                </div>
            </div>

        </div>
    </main>
@endsection
