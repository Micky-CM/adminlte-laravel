@extends('adminlte::page')
@section('title', 'Detalle del inventario')
@section('content_header')
    <h1>Detalle del Inventario</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$inventario->item_name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cantidad: </strong>{{$inventario->quantity}}</p>
            <p><strong>precio: </strong>{{$inventario->price}}</p>
            <p><strong>Fecha de ingreso: </strong>{{$inventario->date}}</p>
            <p><strong>Proveedor: </strong>{{$inventario->supplier_id}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('inventarios.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('inventarios.edit', $inventario)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('inventarios.destroy', $inventario)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop