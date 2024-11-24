@extends('layouts.master')

@section('content')
    <h1>Añadir nueva película</h1>
    <form action="{{ route('catalog.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" id="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="year">Año</label>
            <input type="number" class="form-control" name="year" id="year" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar película</button>
    </form>
@endsection
