@extends('adminlte::page')
@section('title', 'Detalle del Estudiante')
@section('content_header')
    <h1>Detalle del Estudiante</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$student->first_name . ' '. $student->last_name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cédula: </strong>{{$student->ci}}</p>
            <p><strong>Fecha de nacimiento: </strong>{{$student->birth_date}}</p>
            <p><strong>Género: </strong>{{$student->gender}}</p>
            <p><strong>Correo electrónico: </strong>{{$student->email}}</p>
            <p><strong>Teléfono: </strong>{{$student->phone}}</p>
            <p><strong>Dirección: </strong>{{$student->address}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('students.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('students.edit', $student)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('students.destroy', $student)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop