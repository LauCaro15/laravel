@csrf 
@include('dashboard.partials.validation-error')   
<div class="jumbotron">
    <div class="form-group mb-3">        
        <input type="text" class="form-control" name ="name" id ="name"
        placeholder="Nombre Categoría" value= "{{ old('name', $category->name) }}">
    </div>
    
    
    <div class="form-group mb-3">
        <label class="form-label" for="description">Contenido</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" 
            placeholder="Descripción de la publicación" > 
        {{ old('description',$category->description) }}
        </textarea>   
    </div>
    
        
    <div class="row-s12 center mb-3">
        <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
        <a class="btn btn-info" href="{{ URL::previous() }}">Regresar</a>
    </div>
    
</div>


