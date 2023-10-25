<!-- Modal edit -->
<div class="modal fade" id="edit{{$venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Venta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('ventas/' . $venta->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Cliente</label>
            <select name="id_cliente" id="" class="form-control">
            @foreach ($clientes as $cliente)
            <option value="{{$cliente->id}}"> {{$cliente->nombre}}</option>
            @endforeach
            </select>
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="YYYY-MM-DD"  value="{{$venta->fecha}}">
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal delete -->
<div class="modal fade" id="delete{{$venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Venta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('ventas/' . $venta->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de eliminar <strong> {{$venta->cliente->nombre}}? </strong>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
      </form>
    </div>
  </div>
</div>
