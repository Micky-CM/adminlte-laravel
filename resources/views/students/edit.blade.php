@extends('adminlte::page')
@section('title', 'Editar datos del Estudiante')
@section('content_header')
    <h1>Editar datos del Estudiante</h1>@stop
@section('content')
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">Nombres: </label>
                    <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $student->first_name }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Apellidos: </label>
                    <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $student->last_name }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ci">Cédula: </label>
                    <input type="text" id="ci" name="ci" class="form-control" value="{{ $student->ci }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $student->email }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="phone">Teléfono: </label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{ $student->phone }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="birth_date">Fecha de nacimiento: </label>
                    <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{ $student->birth_date }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="gender">Género: </label>
                    <select name="gender" id="gender" class="form-control" value="{{ $student->gender }}" >
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Dirección: </label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $student->address }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('students.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop