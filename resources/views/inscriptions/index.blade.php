@extends('adminlte::page')
@section('title', 'Inscripciones')
@section('content_header')
    <h1>Inscripciones</h1>
@stop
@section('content')
    <a href="{{route('inscriptions.create')}}" class="btn btn-primary">Nueva Inscripción</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">ID</th>
            <th>Nombre del curso</th>
            <th>Nombre del Estudiante</th>
            <th>Fecha de inscripción</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($inscriptions as $inscription)
                <tr>
                    <td>{{$inscription->id}}</td>
                    <td>{{$inscription->course->title}}</td>
                    <td>{{$inscription->student->first_name . ' ' . $inscription->student->last_name}}</td>
                    <td>{{$inscription->inscription_date}}</td>
                    <td>
                        <a href="{{route('inscriptions.edit', $inscription)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('inscriptions.show', $inscription)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('inscriptions.destroy', $inscription)}}" method="POST" style="display: inline">
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
