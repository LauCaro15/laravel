@extends('dashboard.master')
@section('content')
<form action="{{ route("rol.update", $rol->id)}}" method="post">
    @method('put')
    @include('dashboard.rol.form')
</form>
@endsection