@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
<a href="{{route('users.create')}}" class="btn btn-primary">Novo Usuário</a>
@endsection
@section('content')
@session('status')
<div class="alert alert-success" role="alert">
    {{ $value }}
</div>
@endsession
<table class="table table-dark table-striped table-bordered table-hover">

    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">Editar</a>
                <Form action="{{route('users.destroy', $user->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>

                </Form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
