@extends('adminlte::page')
@section('title', 'Detalle del Cargo')
@section('content_header')
    <h1>Detalle del Cargo</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$position->title}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Ubicación: </strong>{{$position->description}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('positions.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('positions.edit', $position)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('positions.destroy', $position)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop