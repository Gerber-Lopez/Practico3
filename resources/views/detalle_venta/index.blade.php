@extends('welcome')

@section('content')

<div class="d-flex justify-content-start">
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#create" style="width: 70px; background-color: #333333; color: white; margin-right: 10px;">
        Nuevo
    </button>
    <button id="ordenarMayor" type="button" class="btn btn-primary btn-sm" style="width: 150px; background-color: #333333; color: white; margin-right: 10px;">
        Mayor
    </button>
    <button id="ordenarMenor" type="button" class="btn btn-primary btn-sm" style="width: 150px; background-color: #333333; color: white; margin-right: 10px;">
        Menor
    </button>
    <form method="GET" action="{{url('/buscar')}}" class="d-flex ms-auto" >
        <input type="text" name="nombre" class="form-control me-2" placeholder="Buscar por Categoria">
        <button class="btn btn-primary" type="submit" style="background-color: #333333; color: white;">Buscar</button>
    </form>
</div>


<div class="table-responsive">
    <br></br>
    <table class="table">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">cliente</th>
                <th scope="col">fecha</th>
                <th scope="col">id_producto</th>
                <th scope="col">precio</th>
                <th scope="col">cantidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody> 
            @foreach($detalle_ventas as $detalle_venta)
            <tr class="">
                <td scope="row">{{$detalle_venta->id_venta}}</td>
                <td>{{$detalle_venta->venta->cliente->nombre}} {{$detalle_venta->venta->cliente->apellidos}}</td>
                <td>{{$detalle_venta->venta->fecha}}</td>
                <td>{{$detalle_venta->producto->descripcion}}</td>
                <td>{{$detalle_venta->preciov}} Bs </td>
                <td>{{$detalle_venta->cantidad}} </td>
                
                <td class="text-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$detalle_venta->id}}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$detalle_venta->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('detalle_venta.info')
            @endforeach          
        </tbody>
    </table>
</div>

@include('detalle_venta.create')
<!-- Script para ordenar de mayor a menor -->
<script>
    document.getElementById("ordenarMayor").addEventListener("click", function() {
        let rows = document.querySelectorAll("tbody tr");
        let sortedRows = Array.from(rows).sort((a, b) => b.children[0].innerText - a.children[0].innerText);
        let tbody = document.querySelector("tbody");
        sortedRows.forEach(row => tbody.appendChild(row));
    });
</script>

<!-- Script para ordenar de menor a mayor -->
<script>
    document.getElementById("ordenarMenor").addEventListener("click", function() {
        let rows = document.querySelectorAll("tbody tr");
        let sortedRows = Array.from(rows).sort((a, b) => a.children[0].innerText - b.children[0].innerText);
        let tbody = document.querySelector("tbody");
        sortedRows.forEach(row => tbody.appendChild(row));
    });
</script>
@endsection