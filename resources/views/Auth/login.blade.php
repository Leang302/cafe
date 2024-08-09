@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow-lg" style="width: 26rem;">
        <div class="card-body">
            <div class="text-center mb-4">
                <!-- Replace with your logo URL -->
                <img src="{{ url('assets/img/logo/logo.jpg') }}" alt="Logo" style="max-width: 100px;">
            </div>
            <h5 class="card-title text-center mb-4">Please login to your account.</h5>
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
                <div class="text-center">
                    <p class="text-danger mb-1">Forgot your password?</p>
                    <a href="#" class="text-decoration-none">Don't worry! click here to reset</a>
                </div>
            </form>
        </div>
    </div>
    {{-- <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form> --}}
</div>
@endsection

