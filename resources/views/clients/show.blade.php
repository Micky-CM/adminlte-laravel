@extends('adminlte::page')
@section('title', 'Detalle del cliente')
@section('content_header')
    <h1>Detalle del Cliente</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$client->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cédula: </strong>{{$client->ci}}</p>
            <p><strong>Correo electrónico: </strong>{{$client->email}}</p>
            <p><strong>Teléfono: </strong>{{$client->phone}}</p>
            <p><strong>Ciudad: </strong>{{$client->city}}</p>
            <p><strong>Dirección: </strong>{{$client->address}}</p>
            <p><strong>Fecha de nacimiento: </strong>{{$client->birth_date}}</p>
            <p><strong>Género: </strong>{{$client->gender}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('clients.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('clients.edit', $client)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('clients.destroy', $client)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop