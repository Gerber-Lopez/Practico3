<!-- Modal edit -->
<div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('productos/' . $producto->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <select name="id_categoria" id="" class="form-control">
                @foreach ($categorias as $categoria)
                @if($categoria->id == $producto->id_categoria)
                <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                @else 
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
                @endforeach
            </select>
       
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$producto->descripcion}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$producto->precio}}">
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
<div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('productos/' . $producto->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            Estas seguro de eliminar <strong> {{$producto->nombre}}? </strong>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
      </form>
    </div>
  </div>
</div>
