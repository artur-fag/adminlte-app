<div class="card">

    <form action="{{route('users.updateProfile', $user->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="card-header">
            Dados Básicos
        </div>


        <div class="card-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de Pessoa</label>
                <select name="type" class="form-control @error('type') is-invalid @enderror" id="">

                    @foreach(['PJ', 'PF'] as $type)
                    <option value="{{$type}}" @selected(old('type')===$type || $user?->profile?->type === $type)>{{$type}}</option>
                    @endforeach

                </select>

                @error('type')
                <div class="invalid-feedback" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Endereço</label>
                <input type="address" name="address"
                    value="{{old('adress') ?? $user?->profile?->address}}"
                    class="form-control @error('eddress') is-invalid @enderror">
                @error('address')
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