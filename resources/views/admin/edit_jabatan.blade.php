@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah arsip</div>
                <div class="card-body">
                    @foreach ($jabatan as $item)
                        <form action="{{ route('jabatan.update', $item->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="jabatan">jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" aria-describedby="basic-addon1"
                                        value="{{ $item->jabatan }}">
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
