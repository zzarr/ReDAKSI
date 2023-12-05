@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah jabatan</div>
                <div class="card-body">
                    <form action="{{ url('admin/jabatan/') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" name="id" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-sm-6">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" aria-describedby="basic-addon1">
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
