@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Vehículos</h3>
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Nuevo Vehículo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>PLACA</th>
                <th>MODELO</th>
                <th>PROPIETARIO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->PLACA }}</td>
                    <td>{{ $vehiculo->MODELO }}</td>
                    <td>{{ $vehiculo->propietario?->NOMBRES }} {{ $vehiculo->propietario?->APELLIDOS }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este vehículo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $vehiculos->links() }}
</div>
@endsection
