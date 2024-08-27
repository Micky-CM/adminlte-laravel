@extends('adminlte::page')
@section('title', 'Reuniones')
@section('content_header')
    <h1>Reuniones agendadas</h1>
@stop
@section('content')
    <a href="{{route('appointments.create')}}" class="btn btn-primary">Nueva reunión</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre del cliente</th>
            <th>Fecha de reunión</th>
            <th>Dirección de la reunión</th>
            <th>Descripción</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->client->name}}</td>
                    <td>{{$appointment->appointment_date}}</td>
                    <td>{{$appointment->address}}</td>
                    <td>{{$appointment->desription}}</td>
                    <td>
                        <a href="{{route('appointments.edit', $appointment)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('appointments.show', $appointment)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('appointments.destroy', $appointment)}}" method="POST" style="display: inline">
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
