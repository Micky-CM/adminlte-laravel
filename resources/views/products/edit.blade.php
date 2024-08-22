@extends('adminlte::page')
@section('title', 'Editar Producto')
@section('content_header')
    <h1>Editar productos</h1>
@stop
@section('content')
    <form action="{{route('products.update', $product)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" id="description" name="description" class="form-control" value="{{$product->description}}" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" value="{{$product->price}}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop