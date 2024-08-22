<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index(){
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }
    public function create(){
        return view('inventories.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'provider' => 'required|string|max:50',
            'date' => 'required|date',
            'ubication' => 'required|string|max:50',
            'observation' => 'required|string'
        ]);
        Inventory::create($request->all());
        return redirect()->route('inventories.index')->with('success', 'El producto fue creado correctamente');
    }

    public function edit(Inventory $inventory){
        return view('inventories.edit', compact('inventory'));
    }
    public function update(Request $request, Inventory $inventory){
        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'provider' => 'required|string|max:50',
            'date' => 'required|date',
            'ubication' => 'required|string|max:50',
            'observation' => 'required|string'
        ]);
        $inventory->update($request->all());
        return redirect()->route('inventories.index')->with('success', 'El producto se ha modificado correctamente');
    }

    public function destroy(Inventory $inventory){
    $inventory->delete();
    return redirect()->route('inventories.index')->with('success', 'El producto fue eliminado correctamente');
}

    public function show(Inventory $inventory){
        return view('inventories.show', compact('inventory'));
    }
}
