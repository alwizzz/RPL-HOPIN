@extends('layouts.mainlayout_nobanner')

@section('content')
<main class="w-100 m-auto d-flex justify-content-center mt-5">
    <form action="/register" method="post">
      @csrf
      <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Register</h1>

      <div class="mb-1">
        <label for="floatingInput">Nama Lengkap</label>
        <input type="text" class="mb-3 form-control @error('nama_lengkap') is-invalid @enderror"
          name='nama_lengkap' value="{{ old('nama_lengkap') }}" autofocus>
      </div>
      @error('name')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
      
      <div class="mb-1">
        <label for="floatingInput">TTL</label>
        <input type="date" class="mb-3 form-control @error('ttl') is-invalid @enderror"
          name='ttl' value="{{ old('ttl') }}" autofocus>
      </div>
      @error('ttl')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
      
      <div class="mb-1">
        <label for="floatingInput">Alamat</label>
        <input type="text" class="mb-3 form-control @error('alamat') is-invalid @enderror"
          name='alamat' value="{{ old('alamat') }}" autofocus>
      </div>
      @error('alamat')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
      
      <div class="mb-1">
        <label for="floatingInput">No HP</label>
        <input type="text" class="mb-3 form-control @error('no_hp') is-invalid @enderror"
          name='no_hp' value="{{ old('no_hp') }}" autofocus>
      </div>
      @error('no_hp')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
      
      <div class="mb-1">
        <label for="floatingInput">Username</label>
        <input type="text" class="mb-3 form-control @error('username') is-invalid @enderror"
          name="username" value="{{ old('username') }}">
      </div>
      @error('username')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
  
      <div class="mb-1">
        <label for="floatingInput">Email</label>
        <input type="email" class="mb-3 form-control @error('email') is-invalid @enderror"
          name="email" value="{{ old('email') }}">
      </div>
      @error('email')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror

      <div class="">
        <label for="floatingPassword">Password</label>
        <input type="password" class="mb-3 form-control @error('password') is-invalid @enderror"  
          name="password" value="{{ old('password') }}">
      </div>
      @error('password')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror

      <div class="">
        <label for="floatingPassword">Repeat Password</label>
        <input type="password2" class="mb-3 form-control @error('password2') is-invalid @enderror"  
          name="password2" value="{{ old('password2') }}">
      </div>
      @error('password2')
        <div class="text-danger">
            {{ $message }}
        </div>
      @enderror
  
      <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
      <p class="text-muted px-5">Already have account? <a class="text-decoration-none" href="/login">Login</a></p>
    </form>
  </main>
@endsection