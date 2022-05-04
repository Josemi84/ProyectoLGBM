<form action="index9.php?sql=insert" method="post">
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label class="form-label">ID del Producto</label>
    <input type="text" class="form-control" name="idProducto" pattern="[0-9]{5}" title="El ID debe componerse de 5 dígitos" placeholder="00000" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="tipo" placeholder="Materia Prima (MP) o Producto Elaborado (PE)" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Precio de compra por unidad</label>
    <input type="text" class="form-control" name="precio" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Fecha de Adquisición</label>
    <input type="date" class="form-control" name="fecha" required>
  </div>
  
  <input type="hidden" name="correct" value="variable-control">
  <br>
  <div class="mb-3">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary" value="crear">Añadir</button>
  </div>
</form>