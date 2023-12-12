@extends('admin.layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Akun
        </div>
        <div class="card-body">
            <form class="needs-validation" novalidate="" action="{{ route('update_account', ['iduser'=>$akun->id]) }}" method="POST">
                @csrf
                
                <div class="row g-3">
                    <input type="hidden" name="id" value="{{ $akun->id }}">
                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Username"
                                name="username" value="{{ $akun->username }}" required="">
                            <div class="invalid-feedback">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span
                                class="text-body-secondary">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ $akun->email }}"
                            name="email">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="col-12">
                        <label for="level">Level user</label>
                        <select class="form-select" aria-label="Default select example" name="leveluser">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="level">Jabatan</label>
                        <select class="form-select" aria-label="Default select example" name="jabatan">
                            @foreach ($jabatan as $item)
                                <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row">
                    <div class="col">
                        <button class="w-100 btn btn-outline-primary btn-lg" type="submit">Update Akun</button>
                    </div>
                    <div class="col">
                        <button class="w-100 btn btn-outline-danger btn-lg" type="submit">batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection