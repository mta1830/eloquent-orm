@extends('layout')

@section('content')
    <div class="container">
    <h1>{{ $title }}</h1>
        <h3>Primer registro</h3>
        <p>ID: {{ $first->id }}</p>
        <p>Nombre: {{ $first->name }}</p>
        <h3>Ultimo Registro</h3>
        <p>ID: {{ $last->id }}</p>
        <p>Nombre: {{ $last->name }}</p>
    </div>
@endsection