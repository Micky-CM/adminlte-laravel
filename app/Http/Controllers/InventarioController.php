<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Supplier;

class InventarioController extends Controller
{
    public function index()
    {
        $inventarios = Inventario::with('supplier')->get();
        return view('inventarios.index', compact('inventarios'));
    }
    public function create()
    {
        $suppliers = Supplier::all();
        return view('inventarios.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        Inventario::create($request->all());
        return redirect()->route('inventarios.index')->with('success', 'El producto fue creado correctamente');
    }

    public function show(Inventario $inventario)
    {
        return view('inventarios.show', compact('inventario'));
    }

    public function edit(string $id)
    {
        $suppliers = Supplier::all();
        $inventario = Inventario::findOrFail($id);
        return view('inventarios.edit', compact('inventario' , 'suppliers'));
    }

    public function update(Request $request, string $id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->update($request->all());
        return redirect()->route('inventarios.index')->with('success', 'El producto se ha modificado correctamente');
    }

    public function destroy(string $id)
    {
        $inventario->delete();
        return redirect()->route('inventarios.index')->with('success', 'El producto fue eliminado correctamente');
    }
}
