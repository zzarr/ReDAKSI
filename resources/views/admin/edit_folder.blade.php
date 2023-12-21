@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah arsip</div>
                <div class="card-body">
                    @foreach ($folders as $item)
                        <form action="{{ route('update_arsip', $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="arsip">arsip</label>
                                    <input type="text" class="form-control" name="arsip" aria-describedby="basic-addon1"
                                        value="{{ $item->nama_folder }}">
                                </div>
                                <div class="col-sm-6">
                                    <label for="">hak akses jabatan</label>
                                    <select name="hak_akses" id="" class="form-select"
                                        velue="{{ $item->hak_akses }}">
                                        @foreach ($jabatan as $item)
                                            <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-outline-primary">simpan</button>
                                </div>
                            </div>

                        </form>
                    @endforeach
                </div>
            </div>
    </main>

    </div>
@endsection
