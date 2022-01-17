@extends('adminlte::page')

@section('title', 'CRUD FORD')

@section('content_header')
@stop

@section('content')
    <h2>Crear Registros Carro</h2>

    <form action="/carros" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Linea</label>
            <input id="linea" name="linea" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Catalogo</label>
            <input id="catalogo" name="catalogo" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Modelo</label>
            <input id="modelo" name="modelo" type="number" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Serie</label>
            <input id="serie" name="serie" type="text" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Color</label>
            <input id="color" name="color" type="text" class="form-control" tabindex="5">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Ubicacion</label>
            <input id="ubicacion" name="ubicacion" type="text" class="form-control" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Dias Piso</label>
            <input id="diasPiso" name="diasPiso" type="number" class="form-control" tabindex="7">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Costo</label>
            <input id="costo" name="costo" type="number" step="any" value="0.00" class="form-control" tabindex="8">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Estatus</label>
            <input id="estatus" name="estatus" type="text" class="form-control" tabindex="9">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Comentarios</label>
            <input id="comentarios" name="comentarios" type="text" class="form-control" tabindex="10">
        </div>
        <a href="/carros" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop