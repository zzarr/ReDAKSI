@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah Standar akreditasi</div>
                <div class="card-body">
                    <form action="{{ Route('insert_standar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nm_standar">Nama Standar</label>
                                <input type="text" class="form-control" name="nm_standar" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-sm-6">
                                <label for="">No Soal</label>
                                <input type="text" class="form-control" name="noSoal" aria-describedby="basic-addon1">

                            </div>
                            <div class="col-sm-6">
                                <label for="">Jumlah Soal</label>
                                <input type="text" class="form-control" name="jumlah_soal"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Bobot</label>
                                <input type="text" class="form-control" name="bobot" aria-describedby="basic-addon1">
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
