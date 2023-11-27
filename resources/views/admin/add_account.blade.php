@extends('admin.layout.app')

@section('content')
    <main class="m-4">
        <div class="container-fluid">
            <h4 class="mb-3">Tambah Akun</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah_Akun</li>
            </ol>
            <div class="card">
                <div class="card-header">
                    Tambah Akun
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ url('/add_account') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                    name="firstname" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                    name="lastname" required="">
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username"
                                        name="username" required="">
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span
                                        class="text-body-secondary">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com"
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
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="level">Jabatan</label>
                                <select class="form-select" aria-label="Default select example" name="leveluser">
                                    <option value="1">Kurikulum</option>
                                    <option value="2">Sarana&Prasarana</option>
                                </select>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="row">
                            <div class="col">
                                <button class="w-100 btn btn-outline-primary btn-lg" type="submit">tambah akun</button>
                            </div>
                            <div class="col">
                                <button class="w-100 btn btn-outline-danger btn-lg" type="submit">batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
