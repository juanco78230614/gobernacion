<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Propietario;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::with('propietario')
            ->orderBy('PLACA')
            ->paginate(10);

        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create()
    {
        $propietarios = Propietario::orderBy('APELLIDOS')->get();
        return view('vehiculos.create', compact('propietarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'PLACA' => 'required|string|max:100|unique:VEHICULOS,PLACA',
            'MODELO' => 'nullable|string|max:100',
            'ID_PROPIETARIO' => 'nullable|exists:PROPIETARIOS,ID_PROPIETARIO',
        ]);

        Vehiculo::create($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado correctamente.');
    }

    public function edit(Vehiculo $vehiculo)
    {
        $propietarios = Propietario::orderBy('APELLIDOS')->get();
        return view('vehiculos.edit', compact('vehiculo', 'propietarios'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'PLACA' => 'required|string|max:100|unique:VEHICULOS,PLACA,' . $vehiculo->ID_VEHICULO . ',ID_VEHICULO',
        ]);

        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo actualizado correctamente.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}
