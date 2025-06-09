<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\Departamento;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('empleados.index', [
            'empleados' => Empleado::with('departamento')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('empleados.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|numeric',
            'nombre' => 'required',
            'apellido' => 'required',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index')->with('success', 'El empleado se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
