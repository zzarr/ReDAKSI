@extends('user.layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    @foreach ($soal as $item)
                        <h4 class="mb-3">{{ $item->pertanyaan }}</h4>
                        <form action="{{ route('simpan_jawaban') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_pertanyaan" value="{{ $item->idp }}">
                            <input type="hidden" name="id_standar" value="{{ $item->id_standar }}">
                            <div class="form-check">
                                <input type="radio" name="jawaban" value="{{ $item->A }}|4">
                                <label for="" class="form-check-label">A. {{ $item->A }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="jawaban" value="{{ $item->B }}|3">
                                <label for="">B. {{ $item->B }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="jawaban" value="{{ $item->C }}|2">
                                <label for="">C. {{ $item->C }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="jawaban" value="{{ $item->D }}|1">
                                <label for="">D. {{ $item->D }}</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="jawaban" value="{{ $item->E }}|0">
                                <label for="">E. {{ $item->E }}</label>
                            </div>
                            <div class="mt-3">

                                <label for="formFile" class="form-label">Upload Bukti</label>
                                <input class="form-control" type="file" id="formFile" name="file">

                            </div>
                            <button type="submit" class="btn btn-outline-primary mt-4">Simpan</button>

                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
