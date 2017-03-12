@extends('layout')

@section('content')
    <div class="jumbotron">
    <div class="container">
    <h1>Hola, mundo!</h1>
    <p>Este es mi proyecto de Laravel Eloquent ORM.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Aprender más &raquo;</a></p>
    </div>
    </div>
    <div class="container">
        <h1>Últimos usuarios registrados</h1>
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