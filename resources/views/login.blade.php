@extends('layout.login')

@section('body')

<div class="container justify-content-center">
  <main class="form-signin">
    <form action="/login" method="POST">
      @csrf
        <h2 style="text-align: center">LOGIN</h2>
        <p>Silakan untuk melakukan login terlebih dahulu</p>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
          {{ session('success') }}
        </div>
        @endif
        
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show col-8" role="alert">
          {{ session('loginError') }}
        </div>
        @endif
        
        {{-- Login Form --}}

        <div class="mt-3 mb-3 col-8">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mt-3 mb-3 col-8">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
        </div>
        <p>Jika belum mempunyai akun silakan untuk melakukan </p>
        <div>
            <p id="registration"><a style="color: rgba(54, 163, 36, 1)" href="/registration">Registration</a></p>
            <p id="forgot"><a style="color: rgba(54, 163, 36, 1)" href="#">Forgot Password</a></p>
        </div>
        <button type="submit">Login</button>
    </form> 
  </main>
</div>

    
@endsection