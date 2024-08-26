@extends('adminlte::page')
@section('title', 'Inventario')
@section('content_header')
    <h1>Inventario de productos</h1>
@stop
@section('content')
    <a href="{{route('inventarios.create')}}" class="btn btn-primary">Nuevo producto</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha de entrada</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($inventarios as $inventario)
                <tr>
                    <td>{{$inventario->id}}</td>
                    <td>{{$inventario->item_name}}</td>
                    <td>{{$inventario->quantity}}</td>
                    <td>{{$inventario->price}}</td>
                    <td>{{$inventario->date}}</td>
                    <td>
                        <a href="{{route('inventarios.edit', $inventario)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('inventarios.show', $inventario)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('inventarios.destroy', $inventario)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
