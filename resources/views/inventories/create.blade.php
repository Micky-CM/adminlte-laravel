@extends('adminlte::page')
@section('title', 'Crear Productos')
@section('content_header')
    <h1>Agregar producto al inventario</h1>
@stop
@section('content')
    <form action="{{route('inventories.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nombre: </label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="provider">Proveedor: </label>
                    <input type="text" id="provider" name="provider" class="form-control" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="quantity">Cantidad: </label>
                    <input type="number" id="quantity" name="quantity" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Descripción: </label>
                    <input type="text" id="description" name="description" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="date">Fecha de ingreso: </label>
                    <input type="date" id="date" name="date" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ubication">Ubicación en almacenes: </label>
                    <input type="text" id="ubication" name="ubication" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="observation">Observaciones: </label>
                    <input type="text" id="observation" name="observation" class="form-control" required>
                </div>
            </div>
        </div>
        <a href="{{route('inventories.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop