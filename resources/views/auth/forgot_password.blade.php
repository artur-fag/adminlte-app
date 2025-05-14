@extends('layouts.auth')
@section('body-class', 'login-page')
@section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="{{route('login')}}">Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Reset Password</p>
            @session('status')
            <div class="alert alert-success" role="alert">
                {{$value }}
            </div>
            @endsession
            <form action="{{route('password.email')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{old('email')}}" />
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class=" row">

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Send me the link</button>
                    </div>

                </div>
            </form>
            <div class="mt-2 text-center">
                <p class="mb-0">
                    <a href="{{route('login')}}" class="text-center"> Back to login </a>
                </p>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

@endsection
