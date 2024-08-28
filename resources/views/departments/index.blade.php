@extends('adminlte::page')
@section('title', 'Departamentos')
@section('content_header')
    <h1>Departamentos</h1>
@stop
@section('content')
    <a href="{{route('departments.create')}}" class="btn btn-primary">Nuevo Departamento</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Departamento</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{$department->id}}</td>
                    <td>{{$department->name}}</td>
                    <td>{{$department->location}}</td>

                    <td>
                        <a href="{{route('departments.edit', $department)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('departments.show', $department)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('departments.destroy', $department)}}" method="POST" style="display: inline">
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
