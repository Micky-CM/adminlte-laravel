@extends('adminlte::page')
@section('title', 'Cursos')
@section('content_header')
    <h1>Cursos</h1>
@stop
@section('content')
    <a href="{{route('courses.create')}}" class="btn btn-primary">Nuevo Curso</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">ID</th>
            <th>Nombre del curso</th>
            <th>Descripción</th>
            <th>Horas académicas</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{$course->id}}</td>
                    <td>{{$course->title}}</td>
                    <td>{{$course->description}}</td>
                    <td>{{$course->hours}}</td>
                    <td>{{$course->price}}</td>
                    <td>
                        <a href="{{route('courses.edit', $course)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('courses.show', $course)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('courses.destroy', $course)}}" method="POST" style="display: inline">
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
