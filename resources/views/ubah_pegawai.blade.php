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
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>

@endsection