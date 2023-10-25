<!-- Modal edit -->
<div class="modal fade" id="edit{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categoria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('clientes/' . $cliente->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->nombre}}">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Apellido Cliente</label>
            <input type="text" class="form-control" name="apellidos" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->apellidos}}">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->empresa}}">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->telefono}}">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Dirrecion</label>
            <input type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="" value="{{$cliente->direccion}}">
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
<div class="modal fade" id="delete{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('clientes/' . $cliente->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-body">
            ¿Estás seguro de que deseas eliminar a <strong>{{ $cliente->nombre }}</strong>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Confirmar</button>
        </div>
      </form>
    </div>
  </div>
</div>
