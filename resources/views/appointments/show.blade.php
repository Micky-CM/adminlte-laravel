@extends('adminlte::page')
@section('title', 'Detalle de la reunión')
@section('content_header')
    <h1>Detalle de la reunión</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$appointment->client->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Fecha de la reunión: </strong>{{$appointment->appointment_date}}</p>
            <p><strong>Dirección de la reunión: </strong>{{$appointment->address}}</p>
            <p><strong>Descripción: </strong>{{$appointment->desription}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('appointments.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('appointments.edit', $appointment)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('appointments.destroy', $appointment)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop