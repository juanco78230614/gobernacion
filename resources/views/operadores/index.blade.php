@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Operadores</h3>
    <a href="{{ route('operadores.create') }}" class="btn btn-primary mb-3">Nuevo Operador</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Razón Social</th>
                <th>NIT</th>
                <th>Modalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($operadores as $op)
                <tr>
                    <td>{{ $op->RAZON_SOCIAL }}</td>
                    <td>{{ $op->NIT }}</td>
                    <td>{{ $op->MODALIDAD }}</td>
                    <td>
                        <a href="{{ route('operadores.edit', $op) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('operadores.destroy', $op) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este operador?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $operadores->links() }}
</div>
@endsection
