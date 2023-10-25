<!-- Modal edit -->
<div class="modal fade" id="edit{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('categorias/' . $categoria->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Categoria</label>
            <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" value="{{$categoria->nombre}}" placeholder="Enter category name">
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

<!-- Modal delete -->
<div class="modal fade" id="delete{{$categoria->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoría</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('categorias/' . $categoria->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            ¿Estás seguro de que deseas eliminar a <strong>{{ $categoria->nombre }}</strong>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Confirmar</button>
        </div>
      </form>
    </div>
  </div>
</div>
