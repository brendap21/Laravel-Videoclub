@extends('layouts.master')

@section('content')
    <h1>Detalles de la película</h1>
    <p>Título: {{ $movie->title }}</p>
    <p>Descripción: {{ $movie->description }}</p>
    <p>Año: {{ $movie->year }}</p>
    <a href="{{ route('catalog.edit', ['id' => $movie->id]) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('catalog.index') }}" class="btn btn-secondary">Volver al catálogo</a>
@endsection
