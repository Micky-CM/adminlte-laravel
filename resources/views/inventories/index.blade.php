@extends('adminlte::page')
@section('title', 'Inventario')
@section('content_header')
    <h1>Inventario de productos</h1>
@stop
@section('content')
    <a href="{{route('inventories.create')}}" class="btn btn-primary">Nuevo producto</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha de entrada</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{$inventory->id}}</td>
                    <td>{{$inventory->name}}</td>
                    <td>{{$inventory->description}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td>{{$inventory->price}}</td>
                    <td>{{$inventory->date}}</td>
                    <td>
                        <a href="{{route('inventories.edit', $inventory)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('inventories.show', $inventory)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('inventories.destroy', $inventory)}}" method="POST" style="display: inline">
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
