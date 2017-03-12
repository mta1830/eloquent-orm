@extends('layout')

@section('content')
    <div class="container">
    <h1>{{ $title }}</h1>
    <table class="table table-hover table-stripped">
        <thead>
        @include('partials.head-users')
        </thead>
        <tbody>
        @include('partials.list-users')
        </tbody>
    </table>
    </div>
@endsection