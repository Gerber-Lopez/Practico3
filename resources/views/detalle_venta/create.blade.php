<!-- Modal create producto -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Detalle</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('detalle_ventas') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Venta</label>
            <select name="id_venta" id="" class="form-control">
            @foreach ($ventas as $venta)
            <option value="{{$venta->id}}"> {{$venta->id}}</option>
            @endforeach
            </select>
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <select name="id_producto" id="" class="form-control">
            @foreach ($productos as $producto)
            <option value="{{$producto->id}}"> {{$producto->descripcion}}</option>
            @endforeach
            </select>
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" class="form-control" name="preciov" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
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
