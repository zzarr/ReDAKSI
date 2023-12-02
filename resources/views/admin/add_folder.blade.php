@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah arsip</div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="arsip">arsip</label>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-sm-6">
                            <label for="">hak akses jabatan</label>
                            <select name="hak_akses" id="" class="form-select">
                                @foreach ($jabatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                                @endforeach


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
