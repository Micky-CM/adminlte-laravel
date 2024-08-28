@extends('adminlte::page')
@section('title', 'Crear Posición')
@section('content_header')
    <h1>Agregar Posición</h1>
@stop
@section('content')
    <form action="{{route('positions.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Nombre del Cargo: </label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción: </label>
            <input type="text" id="description" name="description" class="form-control" required>
        </div>

        <a href="{{route('positions.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop