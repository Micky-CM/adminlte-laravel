@extends('adminlte::page')
@section('title', 'Detalle del producto')
@section('content_header')
    <h1>Detalle del producto</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$inventory->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripción: </strong>{{$inventory->description}}</p>
            <p><strong>Cantidad: </strong>{{$inventory->quantity}}</p>
            <p><strong>Precio: </strong>{{$inventory->price}}</p>
            <p><strong>Proveedor: </strong>{{$inventory->provider}}</p>
            <p><strong>Fecha de ingreso: </strong>{{$inventory->date}}</p>
            <p><strong>Ubicación en almacenes: </strong>{{$inventory->ubication}}</p>
            <p><strong>Observaciones: </strong>{{$inventory->observation}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('inventories.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('inventories.edit', $inventory)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('inventories.destroy', $inventory)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop