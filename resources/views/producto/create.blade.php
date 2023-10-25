<!-- Modal create producto -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('productos') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select name="id_categoria" id="" class="form-control">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}"> {{$categoria->nombre}}</option>
            @endforeach
            </select>
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="">
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
