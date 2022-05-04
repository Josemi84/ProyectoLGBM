<form action="index9.php?sql=delete" method="post">
    <div class="mb-3">
        <label class="form-label">Selecciona ID de compra</label>
        <select class="form-select" aria-label="Default select example" name="id_select" required>

            <?php
            //Mostraremos las opciones según la cantidad de clientes registrados
            $c = $compras->selectAll('compras');

            foreach ($c as $fila) {
                echo "<option value='" . $fila["id_compra"] . "'>" . $fila["id_compra"] . "</option>";
            };

            ?>
        </select>
    </div>
    <br>
    <div class="mb-3">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" value="crear">Eliminar</button>
    </div>
    <input type="hidden" name="correct" value="variable-control">
</form>