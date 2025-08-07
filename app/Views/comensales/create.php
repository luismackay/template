<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<h1>Nuevo Conteo de Comensales</h1>

<?= csrf_field() ?>

<?php if (! empty($errors)): ?>
  <div class="alert alert-danger">
    <ul>
      <?php foreach ($errors as $e): ?>
        <li><?= esc($e) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>
<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
   <div class="panel-heading">
        <h4 class="panel-title">Nuevo Conteo de Comensales</h4>
    </div>
     <div class="panel-body">
          <div class="row">
            <div class=" col-md-4">
              <label for="casino_id">Casino</label>
              <select name="casino_id" id="casino_id" class="form-control">
                <?php foreach ($casinos as $c): ?>
                  <option value="<?= esc($c['id']) ?>" <?= set_select('casino_id', $c['id']) ?>>
                    <?= esc($c['name']) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

          <div class="col-md-2" >
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha"
                   class="form-control"
                   value="<?= set_value('fecha', date('Y-m-d')) ?>"
                   max="<?= date('Y-m-d') ?>">
          </div>
          <div class="col-md-2 mt-4">
          <button class="btn btn-success btn-buscar"><i class="fas fa-search"></i></button>
        </div>
      </div>
          <br>
            <div class="table-responsive div-ventas" style="display: none;">
            </div><!--DIV-OTS-ACTIVIDADES-->
          <hr>
       
    </div>
</div>
<!-- Modal: Editar Cantidad de Comensales -->
<div class="modal fade" id="modalEditCantidad" tabindex="-1" aria-labelledby="modalEditCantidadLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formEditCantidad">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditCantidadLabel">Editar Conteo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="edit_id">
          <div class="form-group">
            <label for="edit_casino">Casino</label>
            <input type="text" id="edit_casino" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label for="edit_fecha">Fecha</label>
            <input type="text" id="edit_fecha" class="form-control" disabled>
          </div>
          <div class="form-group">
            <label for="edit_cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="edit_cantidad" class="form-control" min="0" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal">
            Cancelar
          </button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<script>
  $(function(){
    // Verifica que jQuery esté cargado
    //console.log('jQuery está listo');

    // Asocia el clic al botón Buscar
    $('.btn-buscar').on('click', function(){
      console.log('Click en Buscar');
      traer_registro();
    });
    $(document).on('click', '.btn-edit-comensal', function(){
    const btn = $(this);
    $('#edit_id').val(btn.data('id'));
    $('#edit_casino').val(btn.data('casino'));
    $('#edit_fecha').val(btn.data('fecha'));
    $('#edit_cantidad').val(btn.data('cantidad'));

    // Mostrar el modal
    $('#modalEditCantidad').modal('show');
  });
    $('#formEditCantidad').on('submit', function(e){
    e.preventDefault();
    const payload = $(this).serialize();

    $.ajax({
      url: '<?= base_url('comensales/actualizar') ?>',
      type: 'POST', 
      dataType: 'json',
      data: payload,
      beforeSend() {
        swal({ title:'Guardando...', button:false, timer:1000 });
      },
      success(res) {
        swal.close();
        if (res.success) {
          // Cerrar modal
          $('#modalEditCantidad').modal('hide');
          // Refrescar tabla
          traer_registro();
          swal('¡Listo!', res.message, 'success');
        } else {
          swal('Error', res.message, 'error');
        }
      },
      error() {
        swal.close();
        swal('Error','No se pudo actualizar','error');
      }
    });
  });
    // Función AJAX para traer registros
    function traer_registro() {
      const fecha     = $('#fecha').val();
      const casino_id = $('#casino_id').val();

      // Destruye DataTable previa si existe
      if ($.fn.DataTable.isDataTable('#tabla-listado-ventas')) {
        $('#tabla-listado-ventas').DataTable().clear().destroy();
      }

      $.ajax({
        url: '<?= base_url('comensales/traer_registro') ?>',
        type: 'POST',
        dataType: 'json',
        data: { fecha, casino_id },
        beforeSend() {
          swal({ title:'Cargando...', text:'Espere por favor', button:false });
        },
        success(res) {
          swal.close();
          if (res.table) {
            $('.div-ventas').show().html(res.table);
            $('#tabla-listado-ventas').DataTable({
              searching: true,
              paging:    true,
              ordering:  true,
              info:      true,
              lengthMenu:[[15,30,-1],[15,30,"Todos"]],
              language: {
                lengthMenu: "_MENU_ registros por página",
                zeroRecords: "No se encontraron registros",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                search: "Buscar:",
                paginate: {
                  first: "Primero", last: "Último",
                  next: "Siguiente", previous: "Anterior"
                }
              }
            });
          } else {
            $('.div-ventas').hide();
          }
        },
        error() {
          swal.close();
          swal('Error','Hubo un problema al cargar los datos','error');
        }
      });
    }

    // NO llamar a traer_registro() al cargar la página
    // traer_registro();
  });
</script>
<?= $this->endSection() ?>
<?= view('partials/footer') ?>

