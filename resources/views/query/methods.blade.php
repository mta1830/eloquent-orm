@extends('layout')

@section('content')
    <div class="container">
    <h1>{{ $title }}</h1>
    <table class="table table-hover table-stripped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Género</th>
            <th>Biografía</th>
        </tr>
        </thead>
        <tbody>
        @include('partials.list-users')
        </tbody>
    </table>
    </div>
@endsection