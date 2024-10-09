@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Categoría</h1>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descripción de la categoría"></textarea>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('categories.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
