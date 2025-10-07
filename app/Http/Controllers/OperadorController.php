<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    public function index()
    {
        $operadores = Operador::orderBy('RAZON_SOCIAL')->paginate(10);
        return view('operadores.index', compact('operadores'));
    }

    public function create()
    {
        return view('operadores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'RAZON_SOCIAL' => 'required|string|max:600|unique:OPERADORES,RAZON_SOCIAL',
        ]);

        Operador::create($request->all());
        return redirect()->route('operadores.index')->with('success', 'Operador creado correctamente.');
    }

    public function edit(Operador $operadore)
    {
        return view('operadores.edit', compact('operadore'));
    }

    public function update(Request $request, Operador $operadore)
    {
        $request->validate([
            'RAZON_SOCIAL' => 'required|string|max:600|unique:OPERADORES,RAZON_SOCIAL,' . $operadore->ID_OPERADOR . ',ID_OPERADOR',
        ]);

        $operadore->update($request->all());
        return redirect()->route('operadores.index')->with('success', 'Operador actualizado correctamente.');
    }

    public function destroy(Operador $operadore)
    {
        $operadore->delete();
        return redirect()->route('operadores.index')->with('success', 'Operador eliminado correctamente.');
    }
}
