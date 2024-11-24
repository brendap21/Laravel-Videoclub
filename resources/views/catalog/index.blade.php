@extends('layouts.master')

@section('content')
    <h1>Catálogo de Películas</h1>
    <p>Lista de todas las películas.</p>
    <a href="{{ route('catalog.create') }}" class="btn btn-success">Añadir nueva película</a>
    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('catalog.show', ['id' => $movie->id]) }}">{{ $movie->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
