<br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4>Materias Primas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover text-center">
                            <?php
                            $c = $inventario->selectMP();

                            echo "<tr><th>ID Producto</th><th>Nombre</th><th>Cantidad en almacén</th></tr>";
                            foreach ($c as $fila) {
                                echo "<tr>
                                    <td>" . $fila["id_producto"] . "</td>
                                    <td>" . $fila["nombre"] . "</td>                                  
                                    <td>" . $fila["cantidad"] . "</td>
                                </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4>Productos Elaborados</h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-striped table-hover text-center">
                            <?php
                            $c = $inventario->selectPE();

                            echo "<tr><th>ID Producto</th><th>Nombre</th><th>Cantidad en almacén</th></tr>";
                            foreach ($c as $fila) {
                                echo "<tr>
                                    <td>" . $fila["id_producto"] . "</td>
                                    <td>" . $fila["nombre"] . "</td>                                  
                                    <td>" . $fila["cantidad"] . "</td>
                                </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>