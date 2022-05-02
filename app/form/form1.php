<form action="index2.php?sql=insert" method="post">
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Primer apellido</label>
    <input type="text" class="form-control" name="apellido1" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Segundo apellido</label>
    <input type="text" class="form-control" name="apellido2" required>
  </div>
  <div class="mb-3">
    <label class="form-label">DNI</label>
    <input type="text" class="form-control" name="dni" placeholder="99999999X" pattern="[0-9]{8}[A-Z]" title="El DNI debe componerse de 8 dígitos y letra mayúscula" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Fechade Nacimiento</label>
    <input type="date" class="form-control" name="fecha_nac" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Correo electrónico</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="microsoft@outlook.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Teléfono</label>
    <input type="tel" class="form-control" name="tlf" placeholder="666666666" pattern="[0-9]{9}" title="Un número de teléfono válido debe tener 9 dígitos sin espacios" required>
  </div>
  <input type="hidden" name="correct" value="variable-control">
  <br>
  <div class="mb-3">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary" value="crear">Añadir</button>
  </div>
</form>
