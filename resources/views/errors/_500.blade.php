@extends('layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6 text-center p-4">
            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
            <h1 class="display-1 fw-bold">500</h1>
            <h1 class="mb-4">Internal server error</h1>
            <p class="mb-4">Internal server error</p>
            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('auth.login') }}">Go Back To Home</a>
        </div>
    </div>
</div>
@endsection
