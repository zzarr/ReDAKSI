@extends('layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">tambah arsip</div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="arsip">arsip</label>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-sm-6">
                            <label for="">hak akses jabatan</label>
                            <select name="" id="" class="form-select">
                                <option value="">kurikulum</option>
                                <option value="">humas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">submit</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    </div>
@endsection
