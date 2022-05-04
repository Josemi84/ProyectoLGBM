<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-dark">
                        <h4>Entradas a inventario</h4>
                    </div>
                    <div class="card-body">
                        <!-- Botones ventanas modales -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal4">Añadir</button>
                        <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">Modificar</button>-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal5">Eliminar</button>
                        <hr>
                        <table class="table table-striped table-hover text-center">
                            <?php
                            $c = $compras->selectAll('compras');

                            echo "<tr><th>ID</th><th>Nombre</th><th>Producto ID</th><th>Cantidad</th><th>Precio Unitario</th><th>Fecha Compra</th></tr>";
                            foreach ($c as $fila) {
                                echo "<tr>
                                    <td>" . $fila["id_compra"] . "</td>
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
                        include('../Proyecto/app/modales/modal4.php');
                        include('../Proyecto/app/modales/modal5.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>