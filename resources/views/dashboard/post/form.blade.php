@csrf
@include('dashboard.partials.validation-error')
<div class="jumbotron">
    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Publicación') }}</label>
        <div class="col-md-10">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                placeholder="Nombre publicación" value="{{ old('name', $post->name) }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    {{-- Lista desplegable dinámica, dependemos de un crud de otro modulo --}}
    <div class="form-group row">
        <label for="category_id" class="col-md-2 col-form-label text-md-right">{{ __('Categoría') }}</label>
        <div class="col-md-4">

            <select class="form-control" name="category_id" id="category_id">
                @foreach ($categories as $name => $id)
                    <option value="{{ $id }}"
                        {{ $post->category_id == $id ? 'selected = "selected"' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
        </div>
        <label for="state_post"
            class="col-md-2 col-form-label text-md-right">{{ __('Estado') }}</label>
        <div class="col-md-4">

            <select class="form-control" name="state_post" id="state_post">
                @include('dashboard.components.option-select',['val' => $post->state_post])
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label text-md-right">{{ __('Contenido') }}</label>
        <div class="col-md-10">

            <textarea id="description" cols="30" name="description" rows="10"
                class="form-control @error('description') is-invalid @enderror"
                placeholder="Descripción de la publicación">
        {{ old('description', $post->description) }}
    </textarea>
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


