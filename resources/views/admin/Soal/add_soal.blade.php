@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah data Soal</div>
                <div class="card-body">
                    <form action="{{ Route('tambah_soal', $id_standar) }}" method="post">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <input type="hidden" name="id" value="{{ $id }}">
                                <label for="pertanyaan">Pertanyaan</label>
                                <textarea type="textarea" class="form-control" name="pertanyaan" aria-describedby="basic-addon1" rows="3"></textarea>
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">A</span>
                                <input type="text" name="A" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">B</span>
                                <input type="text" name="B" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">C</span>
                                <input type="text" name="C" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">D</span>
                                <input type="text" name="D" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">E</span>
                                <input type="text" name="E" id="" class="form-control">
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
