
<?php
    $m = $clientes->selectID($_POST['id_select']);

    foreach ($m as $fila) {

        $m1 = $fila["nombre"];
        $m2 = $fila["apellido_1"];
        $m3 = $fila["apellido_2"];
        $m4 = $fila["DNI"];
        $m5 = $fila["fecha_n"];
        $m6 = $fila["email"];
        $m7 = $fila["tlf"];   
    }
?>

<form action="index2.php?sql=update" method="post">
    <div class="mb-3">
        <label class="form-label">ID</label>
        <input type="text" class="form-control" name="id" value="<?php echo $_POST['id_select']?>" readonly>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $m1?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Primer apellido</label>
        <input type="text" class="form-control" name="apellido1" value="<?php echo $m2?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" name="apellido2" value="<?php echo $m3?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">DNI</label>
        <input type="text" class="form-control" name="dni" value="<?php echo $m4?>" pattern="[0-9]{8}[A-Z]" title="El DNI debe componerse de 8 dígitos y letra mayúscula" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fechade Nacimiento</label>
        <input type="date" class="form-control" name="fecha_nac" value="<?php echo $m5?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="email" value="<?php echo $m6?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono</label>
        <input type="tel" class="form-control" name="tlf" value="<?php echo $m7?>" pattern="[0-9]{9}" title="Un número de teléfono válido debe tener 9 dígitos sin espacios" required>
    </div>
    <input type="hidden" name="correct" value="variable-control">
    <br>
    <div class="mb-3">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary" value="resetear">Reset</button>
        <button type="submit" class="btn btn-primary" value="crear">Modificar</button>
    </div>
</form>