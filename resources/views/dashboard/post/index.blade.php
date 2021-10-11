@extends('dashboard.master')
@section('content')

<table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Publicación</th>
        <th scope="col">Categoría</th>
        <th scope="col">Descripción</th>
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>

      </tr>
    </thead>

    <tbody>
      @foreach($posters as $post)
      <tr>
        <th scope= "row">{{ $post -> id}}</th>
        <td>{{ $post -> name}}</td>
        <td>{{ $post -> category_id}}</td>
        <td>{{ $post -> description}}</td>
        <td>{{ $post -> state_post}}</td>
        <td>
          <a href="{{ route('post.show',$post -> id)}}" class="btn btn-info">Ver</a>
          <a href="{{ route('post.edit',$post -> id)}}" class="btn btn-info">Editar</a>
          <a href="{{ route('post.destroy',$post -> id)}}" class="btn btn-danger">Eliminar</a>
        </td>

      </tr>
      @endforeach
    </tbody>
</table>
@endsection
{{ $posters->links() }}