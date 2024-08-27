@extends('adminlte::page')
@section('title', 'Agregar Cliente')
@section('content_header')
    <h1>Agregar datos de un cliente</h1>
@stop
@section('content')
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre: </label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="ci">Cédula: </label>
                    <input type="text" id="ci" name="ci" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="gender">Género: </label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="phone">Teléfono: </label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="birth_date">Fecha de nacimiento: </label>
                    <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="city">Ciudad: </label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="address">Dirección: </label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
            </div>
        </div>
        <a href="{{route('clients.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop