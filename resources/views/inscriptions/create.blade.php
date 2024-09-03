@extends('adminlte::page')
@section('title', 'Crear Inscripción')
@section('content_header')
    <h1>Agregar Inscripción</h1>
@stop
@section('content')
    <form action="{{route('inscriptions.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="course_id">Nombre del curso: </label>
                    <select name="course_id" id="course_id" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->title }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="student_id">Nombre del estudiante: </label>
                    <select name="student_id" id="student_id" class="form-control">
                        @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->first_name . ' ' . $student->last_name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inscription_date">Fecha de inscripción: </label>
                    <input type="date" id="inscription_date" name="inscription_date" class="form-control" required>
                </div>
            </div>
        </div>

        <a href="{{route('inscriptions.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop