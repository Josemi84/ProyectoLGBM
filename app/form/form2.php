<form action="index2b.php" method="post">
    <div class="mb-3">
        <label class="form-label">Selección ID Cliente</label>
        <select class="form-select" aria-label="Default select example" name="id_select" required>

            <?php
            //Mostraremos las opciones según la cantidad de clientes registrados
            $c = $clientes->selectAll('clientes');

            foreach ($c as $fila) {
                echo "<option value='" . $fila["id_cliente"] . "'>" . $fila["id_cliente"] . "</option>";
            };

            ?>
        </select>

    </div>
    <br>
    <div class="mb-3">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" value="crear">Modificar</button>
    </div>
</form>