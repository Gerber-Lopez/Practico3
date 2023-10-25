@extends('welcome')

@section('content')

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create" style="width: 70px; background-color: #333333; color: white;">
        Nuevo
    </button>
    <form method="GET" action="{{url('/buscar')}}" class="d-flex ms-auto" >
        <input type="text" name="nombre" class="form-control me-2" placeholder="Buscar por Cliente">
        <button class="btn btn-primary" type="submit" style=" background-color: #333333; color: white;">Buscar</button>
    </form>
</div>


<div class="table-responsive">
    <br></br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cliente</th>
                <th scope="col">Fecha</th>              
                <th></th>
                <th scope="col" class="text-end" style="width: 17%;"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr class="">
                <td scope="row">{{$venta->id}}</td>
                <td>{{$venta->cliente->nombre}}</td>
                <td>{{$venta->fecha}}</td>
                <td></td>
                <td class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$venta->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$venta->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('venta.info')
            @endforeach          
        </tbody>
    </table>
</div>

@include('venta.create')

@endsection