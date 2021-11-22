@csrf
@include('dashboard.partials.validation-error')
<div class="jumbotron">
    <div class="form-group row">
        <label for="key" class="col-md-2 col-form-label text-md-right">{{ __('Llave') }}</label>
        <div class="col-md-10">
            <input type="text" class="form-control @error('key') is-invalid @enderror" name="key" id="key"
                placeholder="Rol" value="{{ old('key', $rol->key) }}">
            @error('key')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="rol" class="col-md-2 col-form-label text-md-right">{{ __('Rol') }}</label>
        <div class="col-md-10">
            <input type="text" class="form-control @error('rol') is-invalid @enderror" name="rol" id="rol"
                placeholder="Rol" value="{{ old('rol', $rol->rol) }}">
            @error('rol')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Contenido') }}</label>
        <div class="col-md-10">
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                placeholder="Rol" value="{{ old('description', $rol->description) }}">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row-s12 center">
        <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
    </div>

</div>