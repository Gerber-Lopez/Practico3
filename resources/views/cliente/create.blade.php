<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Cliente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('clientes') }}" method="post">
        @csrf

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre Cliente</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Apellido Cliente</label>
            <input type="text" class="form-control" name="apellidos" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Dirrecion</label>
            <input type="text" class="form-control" name="direccion" id="" aria-describedby="helpId" placeholder="">
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
