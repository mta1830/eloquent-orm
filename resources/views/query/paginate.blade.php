@extends('layout')

@section('content')
    <div class="container">
    <h1>{{ $title }}</h1>
        <p>{{ $users->total() }} Registros |
            Página {{ $users->currentPage() }}
            de {{ $users->lastPage() }}
        </p>
    <table class="table table-hover table-stripped">
        <thead>
        @include('partials.head-users')
        </thead>
        <tbody>
        @include('partials.list-users')
        </tbody>
    </table>
        {!! $users->render() !!}
    </div>
@endsection