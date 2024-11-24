@extends('layouts.master')

@section('content')
    <h1>Editar película</h1>
    <form action="{{ route('catalog.update', ['id' => $movie->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $movie->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" required>{{ $movie->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control" name="year" id="year" value="{{ $movie->year }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Guardar cambios</button>
    </form>
@endsection
