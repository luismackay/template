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
    
          <form method="post">
            <div class="row">
  <div class="form-group col-md-4">
    <label for="casino_id">Casino</label>
    <select name="casino_id" id="casino_id" class="form-control">
      <?php foreach ($casinos as $c): ?>
        <option value="<?= esc($c['id']) ?>" <?= set_select('casino_id', $c['id']) ?>>
          <?= esc($c['name']) ?>
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group col-md-2" >
    <label for="fecha">Fecha</label>
    <input type="date" name="fecha" id="fecha"
           class="form-control"
           value="<?= set_value('fecha', date('Y-m-d')) ?>"
           max="<?= date('Y-m-d') ?>">
  </div>

  <div class="form-group col-md-2">
    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad"
           class="form-control"
           value="<?= set_value('cantidad', 0) ?>" min="0">
  </div>
  <div class="col-md-2 mt-4">
  <button type="submit" class="btn btn-primary" disabled>Grabar</button>
</div>
  </div>
</form>
    <br>
      <div class="table-responsive div-ventas" style="display: none;">
      </div><!--DIV-OTS-ACTIVIDADES-->
        <hr>
       
    </div>
</div>

<?= view('partials/footer') ?>
<?= $this->endSection() ?>
