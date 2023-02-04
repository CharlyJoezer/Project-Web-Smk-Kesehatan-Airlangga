@extends('auth.template.index')
@section('content')
    
<div class="wrapper-login-form">
    <div class="header-login d-flex align-items-center mb-3">
        <img  src="asset/logo_skakes.png" width="20%" alt="">
        <div class="w-100">
            <h3 class="m-0 mb-1">Sign In</h3>
            <hr class="m-0">
            <small>Smk Kesehatan Airlangga Balikpapan</small>
        </div>
    </div>
    <div class="form-login">
        <form action="/auth/login" method="POST">
          @csrf
          @if(session()->has('message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span style="color:red;">{{ session('message') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control form-control-sm" id="username" placeholder="Username" autocomplete="off" required>
                <label for="username">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="Password" autocomplete="off" required>
                <label for="password">Password</label>
              </div>
              <div class="wrapper-button-login text-center">
                <button class="btn btn-primary w-50">Masuk</button>
              </div>
        </form>
    </div>
</div>

@endsection