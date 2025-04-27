@extends('layouts.auth')
@section('body-class', 'register-page')
@section('content')
<!--  Section do corpo de registro de usuário -->
<div class="register-box">
    <div class="register-logo">
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-person"></span></div>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" value="{{old('name')}}" />
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}" />
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" />
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
        </div>
        </form>
        <p class="mb-0 text-center">
            <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
    </div>
</div>
</div>
@endsection
