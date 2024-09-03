@extends('adminlte::page')
@section('title', 'Detalle del Curso')
@section('content_header')
    <h1>Detalle del Curso</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$course->title}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripción: </strong>{{$course->desription}}</p>
            <p><strong>Horas académicas: </strong>{{$course->hours}}</p>
            <p><strong>Precio: </strong>{{$course->price}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('courses.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('courses.edit', $course)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('courses.destroy', $course)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop