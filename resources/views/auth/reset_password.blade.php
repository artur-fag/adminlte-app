@extends('layouts.auth')
@section('body-class', 'register-page')
@section('content')
<!--  Section do corpo de registro de usuário -->
<div class="register-box">
    <div class="register-logo">
        <a href="{{route('login')}}">Register</a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Reset Password</p>
            <form action="{{route('password.update')}}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{request()->token}}">
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
                    <button type="submit" class="btn btn-primary">Reset Password</button>
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
