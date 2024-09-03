@extends('adminlte::page')
@section('title', 'Editar Curso')
@section('content_header')
    <h1>Editar Curso</h1>@stop
@section('content')
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Nombre del curso: </label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $course->title }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="hours">Horas académicas: </label>
                    <input type="number" id="hours" name="hours" class="form-control" value="{{ $course->hours }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="price">Precio: </label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{ $course->price }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Descripción: </label>
                    <input type="text" id="description" name="description" class="form-control" value="{{ $course->description }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('courses.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop