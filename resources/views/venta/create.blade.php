<!-- Modal create cliente -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Venta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('ventas') }}" method="post">
        @csrf
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
            <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="YYYY-MM-DD">
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
