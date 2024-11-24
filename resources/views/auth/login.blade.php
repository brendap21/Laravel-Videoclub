@extends('layouts.master')

@section('content')
    <h1>Iniciar sesión</h1>
    <form action="{{ url('auth/login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
@endsection
