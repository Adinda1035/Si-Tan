@extends('layout.mainL')
@section('form')
<form action="">
  @csrf
  @if(session()->has('success'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{ session('success') }}
  </div>
  @endif

  @if(session()->has('loginError'))
  <div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
  </div>
  @endif
  <div class="form-group">
      <input type="username" class="form-control form-control-user @error('username') is-invalid @enderror"
          name="username" id="username" aria-describedby="emailHelp"
          placeholder="Username" required>
      @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
  </div>
  <div class="form-group">
      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
          name="password" id="password" placeholder="Password" required>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
  </div>
  {{-- <label for="peran">Login Sebagai :</label>
  <div class="form-group row" name="peran">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="loginAdmin" id="loginAdmin">
        <label class="form-check-label" for="loginAdmin">
          Admin
        </label>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="loginPegawai" id="loginPegawai">
        <label class="form-check-label" for="loginPegawai">
          Pegawai
        </label>
      </div>
    </div>
  </div> --}}
  {{-- <div class="form-group">
      <div class="custom-control custom-checkbox small">
          <input type="checkbox" class="custom-control-input" name="remember" id="remember">
          <label class="custom-control-label" for="customCheck">Remember Me</label>
      </div>
  </div> --}}
  <button class="btn btn-primary btn-user btn-block" type="submit" name="login">Login</button>
</form>
<div class="text-center">
    <a class="small" href="forgot-password.html">Lupa Password ?</a>
</div>
<div class="text-center">
    <a class="small" href="register.html">Daftar akun!</a>
</div>
@endsection