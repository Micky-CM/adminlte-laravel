@extends('adminlte::page')
@section('title', 'Editar reunión')
@section('content_header')
    <h1>Editar reunión</h1>@stop
@section('content')

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="client_id">Nombre del cliente: </label>
                    <select name="client_id" id="client_id" class="form-control">
                        @foreach($clients as $client)
                        <option value="{{ $client->id }}" @if($client->id == $appointment->client_id) selected @endif>
                        {{ $client->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Dirección de la reunión: </label>
                    <input type="text" id="address" name="address" class="form-control" value="{{ $appointment->address }}" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="appointment_date">Fecha de reunión: </label>
                    <input type="date" id="appointment_date" name="appointment_date" class="form-control" value="{{ $appointment->appointment_date }}" required>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="desription">Descripción: </label>
                    <input type="text" id="desription" name="desription" class="form-control" value="{{ $appointment->desription }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('appointments.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop