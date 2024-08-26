@extends('adminlte::page')
@section('title', 'Editar Proveedores')
@section('content_header')
    <h1>Editar proveedores</h1>
@stop
@section('content')
    <form action="{{route('suppliers.update', $supplier)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{$supplier->name}}" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico: </label>
            <input type="text" id="email" name="email" class="form-control" value="{{$supplier->email}}" required>
        </div>
        <div class="form-group">
            <label for="phone">Teléfono: </label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{$supplier->phone}}" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección: </label>
            <input type="text" id="address" name="address" class="form-control" value="{{$supplier->address}}" step="0.01" required>
        </div>

        <a href="{{route('suppliers.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop