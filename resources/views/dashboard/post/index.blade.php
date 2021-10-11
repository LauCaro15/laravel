@extends('dashboard.master')
@section('content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Publicación</th>
        <th scope="col">Categoría</th>
        <th scope="col">Descripción</th>
        <th scope="col">Estado</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
</table>
  
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>lorem</td>
        <td>lorem</td>
        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum excepturi iure nihil accusamus temporibus dolorem placeat facilis accusantium voluptates ab, error sit maxime ipsam laudantium officia, laboriosam mollitia unde praesentium!</td>
      </tr>
    </tbody>
</table>
@endsection