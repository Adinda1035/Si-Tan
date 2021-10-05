@extends('layout.mainT')
@section('isi')
<h1>Tambah Data Pegawai</h1>
<br>
<form action="">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama..">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan email..">
    </div>
    <label for="peran">Peran</label>
    <div class="form-group row" name="peran">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="roleAdmin" id="roleAdmin">
          <label class="form-check-label" for="roleAdmin">
            1. Admin
          </label>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rolePegawai" id="rolePegawai">
          <label class="form-check-label" for="rolePegawai">
            2. Pegawai
          </label>
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan password">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
    </div>
    <div class="mb-3">
        <label for="password2" class="form-label">Password</label>
        <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi password">
      </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>

@endsection