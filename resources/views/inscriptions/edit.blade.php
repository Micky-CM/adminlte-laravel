@extends('adminlte::page')
@section('title', 'Editar Inscripción')
@section('content_header')
    <h1>Editar Inscripción</h1>@stop
@section('content')
    <form action="{{ route('inscriptions.update', $inscription->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="course_id">Nombre del curso: </label>
                    <select name="course_id" id="course_id" class="form-control" required>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}" @if($course->id == $inscription->course_id) selected @endif>
                            {{ $course->title }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="student_id">Nombre del estudiante: </label>
                    <select name="student_id" id="student_id" class="form-control" required>
                        @foreach($students as $student)
                        <option value="{{ $student->id }}" @if($student->id == $inscription->student_id) selected @endif>
                            {{ $student->first_name . ' ' . $student->last_name }}
                        </option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inscription_date">Fecha de inscripción: </label>
                    <input type="date" id="inscription_date" name="inscription_date" class="form-control" value="{{ $inscription->inscription_date }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('inscriptions.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop