@csrf    
<div class="form-group mb-3">        
    <input type="text" class="form-control" name ="name" id ="name"
    placeholder="Nombre publicación" value= "{{old('name',$post->name)}}" >
</div>

<div class="form-group mb-3">  
    <label for="category_id">Categoria</label> 
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $name => $id)
            <option value="{{ $id }}"{{ $post->category_id == $id ? 'selected = "selected"' : ''}}>
            {{ $name }}</option>
        @endforeach
    </select>     
</div>

<div class="form-group mb-3">  
    <label for="state_post">Estado del articulo</label> 
    <select class="form-control" name="state_post" id="state_post">
        @include('dashboard.components.option-select', ['val' => $post->state_post])
    </select>     
</div>

<div class="form-group mb-3">
    <label class="form label" for="description">Contenido</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="nombre publicación" >
    {{old('description',$post->description)}}
    </textarea>   
</div>
    
<div class="row-s12 center mb-3">
    <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
</div>

