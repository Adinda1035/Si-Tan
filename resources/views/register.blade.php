@extends('layout.mainL')
@section('form')
<form class="user" action="" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('nama') is-invalid @enderror" name="nama" id="nama"
            placeholder="Masukkan Nama" required value="{{ old('nama') }}">
        @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="email"
            placeholder="Email Address" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror" name="username" id="username"
            placeholder="Username" required value="{{ old('username') }}">
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
            id="password" placeholder="Masukkan Password" required >
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    {{-- <div class="form-group">
        <input type="password" class="form-control form-control-user @error('password2') is-invalid @enderror" name="password2"
                id="password2" placeholder="Ulangi Password" required >
        @error('password2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div> --}}
    <button class="btn btn-primary btn-user btn-block" type="submit" name="daftar">Daftar</button>
</form>
<div class="text-center">
    <a class="small" href="forgot-password.html">Lupa Password?</a>
</div>
<div class="text-center">
    <a class="small" href="login.php">Sudah punya akun? Login!</a>
@endsection