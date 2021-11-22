@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="form-group mb-3">        
            <input readonly type="text" class="form-control" name ="rol" id ="rol" 
            placeholder="nombre publicación" value= "{{old('rol',$rol->rol)}}" >
        </div>
        
        <div class="form-group mb-3">
            <label class="form label" for="description">Contenido</label>
            <textarea readonly name="description" id="description" cols="30" rows="10" class="form-control" placeholder="nombre publicación">
                {{old('description',$rol->description)}}
            </textarea>   
        </div>
        
            
        <div class="row-s12 center mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
        </div>
    </div>
</div>
@endsection