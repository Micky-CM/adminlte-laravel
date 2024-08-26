@extends('adminlte::page')
@section('title', 'Crear Proveedor')
@section('content_header')
    <h1>Agregar proveedor</h1>
@stop
@section('content')
    <form action="{{route('suppliers.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre: </label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico: </label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Teléfono: </label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección: </label>
            <input type="text" id="address" name="address" class="form-control" required>
        </div>

        <a href="{{route('suppliers.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop