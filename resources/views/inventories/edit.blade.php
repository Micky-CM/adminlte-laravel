@extends('adminlte::page')
@section('title', 'Editar Producto')
@section('content_header')
    <h1>Editar productos</h1>
@stop
@section('content')
    <form action="{{route('inventories.update', $inventory)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$inventory->name}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="provider">Proveedor: </label>
                    <input type="text" id="provider" name="provider" class="form-control" value="{{$inventory->provider}}" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="price">Precio</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{$inventory->price}}" step="0.01" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="quantity">Cantidad: </label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="{{$inventory->quantity}}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" id="description" name="description" class="form-control" value="{{$inventory->description}}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="date">Fecha de ingreso: </label>
                    <input type="date" id="date" name="date" class="form-control" value="{{$inventory->date}}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ubication">Ubicación en almacenes: </label>
                    <input type="text" id="ubication" name="ubication" class="form-control" value="{{$inventory->ubication}}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="observation">Observaciones: </label>
                    <input type="text" id="observation" name="observation" class="form-control" value="{{$inventory->observation}}" required>
                </div>
            </div>
        </div>
        <a href="{{route('inventories.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop