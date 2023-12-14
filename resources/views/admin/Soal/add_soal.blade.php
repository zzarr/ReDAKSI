@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah data Soal</div>
                <div class="card-body">
                    <form action="{{ Route('tambah_arsip') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <input type="hidden" name="id" value="{{ $id }}">
                                <label for="arsip">arsip</label>
                                <input type="text" class="form-control" name="arsip" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-sm-6">
                                <label for="">hak akses jabatan</label>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col">
                                <button type="submit" class="btn btn-outline-primary">simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>

    </div>
@endsection
