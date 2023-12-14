@extends('admin.layout.app')
@section('content')
    <main>
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">tambah data Soal</div>
                <div class="card-body">
                    <form action="{{ Route('tambah_soal') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <input type="hidden" name="id" value="{{ $id }}">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" aria-describedby="basic-addon1">
                            </div>
                            <div class="col-sm-6">
                                <label for="">standar</label>
                                <select name="standar" id="" class="form-select">
                                    @foreach ($standar as $item)
                                        <option value="{{ $item->id }}">{{ $item->nm_standar }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text " id="addon-wrapping">A</span>
                                <input type="text" name="A" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">B</span>
                                <input type="text" name="B" id="" class="form-control">
                            </div>
                            <div class="col-sm-12 input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">c</span>
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
