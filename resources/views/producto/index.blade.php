@extends('welcome')

@section('content')

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create" style="width: 70px; background-color: #333333; color: white;">
        Nuevo
    </button>
    <form action="{{route('productos.index')}}" method="POST"  class="d-flex ms-auto">
        @method('GET')
    @csrf 
    <select name="buscar" id="buscar">
            <option value="">Seleccione</option>
            @foreach ($productos as $producto)    
            <option value="{{$producto->descripcion}}"> {{$producto->descripcion}}</option>
            @endforeach
            </select>
    <input type="submit" value="Buscar" style=" background-color: #333333; color: white;">
    </form>
</div>

<div class="table-responsive">
    <br></br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody> 
            @foreach($productos as $producto)
            <tr class="">
                <td scope="row">{{$producto->id}}</td>
                <td>{{$producto->categoria->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}} Bs</td>
                <td class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('producto.info')
            @endforeach          
        </tbody>
    </table>
</div>

@include('producto.create')

@endsection