@extends('dashboard.master')
@section('content')
    <form action="{{ route('rol.store')}}" method="post">
        @include('dashboard.rol.form')
    </form>
@endsection