@extends('main')
@section('content')
<div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Tambah Akun</h4>
    <form class="needs-validation" novalidate="">
      <div class="row g-3">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">First name</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-12">
          <label for="username" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text">@</span>
            <input type="text" class="form-control" id="username" placeholder="Username" required="">
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>


        <div class="col-md-5">
          <label for="country" class="form-label">Jabatan</label>
          <select class="form-select" id="country" required="">
            <option value="">Guru</option>
            <option>Kepala Sekolah</option>
            <option>Kurikulum</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>

        <div class="col-md-5">
            <label for="country" class="form-label">Level User</label>
            <select class="form-select" id="country" required="">
              <option value="">User</option>
              <option>Admin</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

      <div class="row gy-3">
        <div class="col-md-6">
          <label for="cc-name" class="form-label">Password</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required="">
          <small class="text-body-secondary"></small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>

        <div class="col-md-6">
          <label for="cc-number" class="form-label">Konfirmasi Password</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required="">
          <div class="invalid-feedback">
            Credit card number is required
          </div>
        </div>
      </div>

      <button class="w-100 btn btn-primary btn-lg" type="submit">Daftar Akun</button>
    </form>
  </div>
@endsection