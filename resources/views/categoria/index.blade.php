@extends('welcome')

@section('content')

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create" style="width: 70px; background-color: #333333; color: white;">
        Nuevo
    </button>
    <form action="{{route('categorias.index')}}" method="POST"  class="d-flex ms-auto">
        @method('GET')
    @csrf 
    <select name="criterio" id="criterio">
        <option value="">Buscar por:</option>
        <option value="id">Id</option>
        <option value="nombre">Nombre</option>
    </select>
    <input type="text" id="buscar" name="buscar"class="form-control me-2">
    <input type="submit" value="Buscar" style=" background-color: #333333; color: white;">
    </form>
</div>

<div class="table-responsive">
    <br></br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr class="">
                <td scope="row">{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('categoria.info')
            @endforeach          
        </tbody>
    </table>
</div>

@include('categoria.create')

@endsection