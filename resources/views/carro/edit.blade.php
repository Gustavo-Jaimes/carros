@extends('adminlte::page')

@section('title', 'CRUD FORD')

@section('content_header')
    
@stop

@section('content')
    <h2>Editar Registros</h2>

    <form action="/carros/{{$carro->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Linea</label>
            <input id="linea" name="linea" type="text" class="form-control" value="{{$carro->linea}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Catalogo</label>
            <input id="catalogo" name="catalogo" type="text" class="form-control" value="{{$carro->catalogo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="number" class="form-control" value="{{$carro->modelo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Serie</label>
            <input id="serie" name="serie" type="text" class="form-control" value="{{$carro->serie}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Color</label>
            <input id="color" name="color" type="text" class="form-control" value="{{$carro->color}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Ubicacion</label>
            <input id="ubicacion" name="ubicacion" type="text" class="form-control" value="{{$carro->ubicacion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dias Piso</label>
            <input id="diasPiso" name="diasPiso" type="number" class="form-control" value="{{$carro->diasPiso}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="number" step="any" value="0.00" class="form-control" value="{{$carro->costo}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estatus</label>
            <input id="estatus" name="estatus" type="text" class="form-control" value="{{$carro->estatus}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Comentarios</label>
            <input id="comentarios" name="comentarios" type="text" class="form-control" value="{{$carro->comentarios}}">
        </div>
        <a href="/carros" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop