@extends('layout')

@section('content')
    <h1>Todos los usuarios (ALL)</h1>
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
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->biography }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection