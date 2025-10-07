@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Nuevo Operador</h3>

    <form action="{{ route('operadores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="RAZON_SOCIAL" class="form-label">Razón Social</label>
            <input type="text" name="RAZON_SOCIAL" id="RAZON_SOCIAL" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="NIT" class="form-label">NIT</label>
            <input type="number" name="NIT" id="NIT" class="form-control">
        </div>

        <div class="mb-3">
            <label for="MODALIDAD" class="form-label">Modalidad</label>
            <input type="text" name="MODALIDAD" id="MODALIDAD" class="form-control">
        </div>

        <div class="mb-3">
            <label for="SERVICIO" class="form-label">Servicio</label>
            <input type="text" name="SERVICIO" id="SERVICIO" class="form-control">
        </div>

        <div class="mb-3">
            <label for="DEPARTAMENTO" class="form-label">Departamento</label>
            <input type="text" name="DEPARTAMENTO" id="DEPARTAMENTO" class="form-control">
        </div>

        <div class="mb-3">
            <label for="DOM_LEGAL" class="form-label">Domicilio Legal</label>
            <input type="text" name="DOM_LEGAL" id="DOM_LEGAL" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('operadores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
