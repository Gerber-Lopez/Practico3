@extends('welcome')

@section('content')

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create" style="width: 70px; background-color: #333333; color: white;">
        Nuevo
    </button>

    <form method="GET" action="{{route('clientes.index')}}" class="d-flex ms-auto" >
    @method('GET')
    @csrf 
    <select name="criterio" id="criterio">
        <option value="">Buscar por:</option>
        <option value="nombre">Nombre</option>
        <option value="empresa">Empresa</option>
    </select>
        <input type="text" id="buscar" name="buscar"class="form-control me-2">
        <button class="btn btn-primary" type="submit" style=" background-color: #333333; color: white;">Buscar</button>
    </form>
</div>


<div class="table-responsive">
    <br></br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr class="">
                <td scope="row">{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellidos}}</td>
                <td>{{$cliente->empresa}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$cliente->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$cliente->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('cliente.info')
            @endforeach          
        </tbody>
    </table>
</div>

@include('cliente.create')

@endsection
