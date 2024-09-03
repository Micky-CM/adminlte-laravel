@extends('adminlte::page')
@section('title', 'Detalle de la Inscripción')
@section('content_header')
    <h1>Detalle de la Inscripción</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$inscription->course->title}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Nombre del estudiante: </strong>{{$inscription->student->first_name . ' ' . $inscription->student->last_name}}</p>
            <p><strong>Fecha de inscripción: </strong>{{$inscription->inscription_date}}</p>
            <p><strong>Horas académicas: </strong>{{$inscription->course->hours}}</p>
            <p><strong>Precio: </strong>{{$inscription->course->price}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('inscriptions.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('inscriptions.edit', $inscription)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('inscriptions.destroy', $inscription)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop