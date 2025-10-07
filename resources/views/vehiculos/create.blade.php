@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Nuevo Vehículo</h3>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Placa</label>
            <input type="text" name="PLACA" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" name="MODELO" class="form-control">
        </div>
        <div class="mb-3">
            <label>Propietario</label>
            <select name="ID_PROPIETARIO" class="form-select">
                <option value="">-- Sin propietario --</option>
                @foreach($propietarios as $p)
                    <option value="{{ $p->ID_PROPIETARIO }}">{{ $p->NOMBRES }} {{ $p->APELLIDOS }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
