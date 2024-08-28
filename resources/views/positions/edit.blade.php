@extends('adminlte::page')
@section('title', 'Editar Posición')
@section('content_header')
    <h1>Editar Posición</h1>
@stop
@section('content')
    <form action="{{route('positions.update', $position)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nombre del Cargo: </label>
            <input type="text" name="title" id="title" class="form-control" value="{{$position->title}}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción: </label>
            <input type="text" id="description" name="description" class="form-control" value="{{$position->description}}" step="0.01" required>
        </div>

        <a href="{{route('positions.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop