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
                    <form action="" method="post">
                        <div class="form-check">
                            <input type="radio" name="jawaban" value="4">
                            <label for="" class="form-check-label">A. {{ $item->A }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jawaban" value="3">
                            <label for="">B. {{ $item->B }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jawaban" value="2">
                            <label for="" >C. {{ $item->C }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jawaban" value="1">
                            <label for="">D. {{ $item->D }}</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jawaban" value="1">
                            <label for="">E. {{ $item->E }}</label>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </main>    
@endsection