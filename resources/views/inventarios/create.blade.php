@extends('adminlte::page')
@section('title', 'Crear Producto')
@section('content_header')
    <h1>Agregar producto</h1>
@stop
@section('content')
    <form action="{{route('inventarios.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="item_name">Nombre: </label>
            <input type="text" id="item_name" name="item_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad: </label>
            <input type="number" id="quantity" name="quantity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Precio: </label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="date">Fecha de ingreso: </label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="supplier_id">Proveedor: </label>
            <select name="supplier_id" id="supplier_id">
                @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
            </select>
        </div>

        <a href="{{route('inventarios.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop