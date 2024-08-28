@extends('adminlte::page')
@section('title', 'Posiciones')
@section('content_header')
    <h1>Posiciones</h1>
@stop
@section('content')
    <a href="{{route('positions.create')}}" class="btn btn-primary">Nueva Posición</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Cargo de trabajo</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td>{{$position->id}}</td>
                    <td>{{$position->title}}</td>
                    <td>{{$position->description}}</td>

                    <td>
                        <a href="{{route('positions.edit', $position)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('positions.show', $position)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('positions.destroy', $position)}}" method="POST" style="display: inline">
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
