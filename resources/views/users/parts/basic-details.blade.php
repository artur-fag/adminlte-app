<div class="card">

    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-header">
            Dados Básicos
        </div>


        <div class="card-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" name="name"
                    value="{{old('name') ?? $user->name}}"
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
                    value="{{old('email') ?? $user->email}}"
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

        </div>


        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>

    </form>
</div>