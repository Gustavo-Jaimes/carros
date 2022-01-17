@extends('adminlte::page')

@section('title', 'CRUD FORD')

@section('content_header')
<h1>Listado de carros</h1>
@stop

@section('content')
    <a href="carros/create" class="btn btn-primary mb-4">CREAR</a>

    <table id="carros" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Linea</th>
                <th scope="col">Catalogo</th>
                <th scope="col">Modelo</th>
                <th scope="col">Serie</th>
                <th scope="col">Color</th>
                <th scope="col">Ubicacion</th>
                <th scope="col">DiasPiso</th>
                <th scope="col">Costo</th>
                <th scope="col">Estatus</th>
                <th scope="col">Comentarios</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carros as $carro)
                <tr>
                    <td>{{$carro->id}}</td>
                    <td>{{$carro->linea}}</td>
                    <td>{{$carro->catalogo}}</td>
                    <td>{{$carro->modelo}}</td>
                    <td>{{$carro->serie}}</td>
                    <td>{{$carro->color}}</td>
                    <td>{{$carro->ubicacion}}</td>
                    <td>{{$carro->diasPiso}}</td>
                    <td>{{$carro->costo}}</td>
                    <td>{{$carro->estatus}}</td>
                    <td>{{$carro->comentarios}}</td>
                    <td>
                        <form action="{{ route ('carros.destroy',$carro->id)}}" method="POST">
                            <a href="/carros/{{$carro->id}}/edit" class="btn btn-info" href="">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#carros').DataTable({
                "lengthMenu":[[5,10,50,-1], [5,10,50, "All"]]
            });
        } );
    </script>
@stop