<!-- Modal edit -->
<div class="modal fade" id="edit{{$detalle_venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Detalle</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('detalle_ventas/' . $detalle_venta->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">venta</label>
            <select name="id_venta" id="" class="form-control">
                @foreach ($ventas as $venta)
                @if($venta->id == $detalle_venta->id_venta)
                <option value="{{$venta->id}}" selected>{{$venta->fecha}}</option>
                @else 
                <option value="{{$venta->id}}">{{$venta->fecha}}</option>
                @endif
                @endforeach
            </select> 
          </div>
          <div class="mb-3">
            <label for="" class="form-label">producto</label>
            <select name="id_producto" id="" class="form-control">
                @foreach ($productos as $producto)
                @if($producto->id == $detalle_venta->id_producto)
                <option value="{{$producto->id}}" selected>{{$producto->descripcion}}</option>
                @else 
                <option value="{{$producto->id}}">{{$producto->descripcion}}</option>
                @endif
                @endforeach
            </select> 
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" class="form-control" name="preciov" id="" aria-describedby="helpId" placeholder="" value="{{$detalle_venta->preciov}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$detalle_venta->cantidad}}">
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
<div class="modal fade" id="delete{{$detalle_venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('detalle_ventas/' . $detalle_venta->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de eliminar <strong> {{$detalle_venta->id}}? </strong>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
      </form>
    </div>
  </div>
</div>
