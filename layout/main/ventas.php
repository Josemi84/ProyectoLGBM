<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h4>Salidas de inventario</h4>
                    </div>
                    <div class="card-body">
                        <!-- Botones ventanas modales -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal6">Añadir</button>
                        <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Modificar</button>-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal7">Eliminar</button>
                        <hr>
                        <table class="table table-striped table-hover text-center">
                            <?php
                            $c = $ventas->selectAll('ventas');

                            echo "<tr><th>ID</th><th>Nombre</th><th>Producto ID</th><th>Cantidad</th><th>Precio Unitario</th><th>Fecha Venta</th></tr>";
                            foreach ($c as $fila) {
                                echo "<tr>
                                    <td>" . $fila["id_venta"] . "</td>
                                    <td>" . $fila["nombre"] . "</td>
                                    <td>" . $fila["id_producto"] . "</td>
                                    <td>" . $fila["cantidad"] . "</td>
                                    <td>" . $fila["precio_u"] . "</td>
                                    <td>" . $fila["fecha"] . "</td>
                                </tr>";
                            }
                            ?>
                        </table><br>

                        <!--Añadimos los enlaces a las modales de clientes-->
                        <?php
                        include('../Proyecto/app/modales/modal6.php');
                        include('../Proyecto/app/modales/modal7.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>