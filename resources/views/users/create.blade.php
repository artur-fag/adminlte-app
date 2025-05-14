@extends('layouts.default')
@section('page-title', 'Adicionar Usuário')
@section('content')

<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" name="name"
            value="{{old('name')}}"
            class="form-control @error('name') is-invalid @enderror">
        @error('name')
        <div class="invalid-feedback" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email"
            value="{{old('email')}}"
            class="form-control @error('email') is-invalid @enderror">
        @error('email')
        <div class="invalid-feedback" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Senha</label>
        <input type="password" name="password"
            class="form-control @error('password') is-invalid @enderror">
        @error('password')
        <div class="invalid-feedback" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>


    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
@endsection
