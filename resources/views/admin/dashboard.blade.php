@extends('admin.layout.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">

            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card bg-dark mb-4 p-0">
                        <div class="card-header m-0 text-white">
                            <i class="fas fa-chart-area me-1"></i>
                            Akun
                        </div>
                        <div class="card-body text-white">
                            <p class="h2"><i class="fas fa-user"></i> {{ $akun }}</p>


                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-white" href="{{ route('account') }}">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card bg-dark mb-4">
                        <div class="card-header text-white">
                            <i class="fas fa-chart-bar me-1"></i>
                            Standar Akreditasi
                        </div>
                        <div class="card-body text-white">
                            <p class="h2"><i class="fa-solid fa-file-pen"></i>{{ $standar }}</p>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small stretched-link text-white" href="{{ route('account') }}">View Details</a>
                            <div class="small text-white"><svg class="svg-inline--fa fa-angle-right fa-w-8"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                                    </path>
                                </svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>

                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </main>
@endsection
