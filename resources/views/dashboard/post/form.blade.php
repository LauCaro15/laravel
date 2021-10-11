@csrf    
<div class="form-group">        
    <input type="type" class="form-control" name ="name" id ="name" placeholder="Ingresa nombre publicación"
    placeholder="nombre publicación" value= "old('name',$post->name)" >
</div>


<div class="form-group">
    <label class="form label" for="description">Contenido</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" class="form-control">
        {{old('description',$post->description)}}
    </textarea>   
</div>

    
<div class="row-s12 center">
    <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
</div>

