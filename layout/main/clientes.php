<div class="card">
  <div class="card-header bg-success">
    <h4>Registro clientes</h4>
  </div>
  <div class="card-body">

    
    <!-- Botones ventanas modales -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal1">Añadir</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal2">Modificar</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal3">Eliminar</button>
    <hr>

    <table class="table table-striped table-hover">
      <?php
      $c = $clientes->selectAll();

      echo "<tr><th>ID</th><th>Nombre Completo</th><th>DNI</th><th>Fecha de Nacimiento</th><th>Email</th><th>Tel&eacutefono</th></tr>";
      foreach ($c as $fila) {
        echo "<tr>
                    <td>" . $fila["id_cliente"] . "</td>
                    <td>" . $fila["nombre"] . " " . $fila["apellido_1"] . " " . $fila["apellido_2"] . "</td>
                    <td>" . $fila["DNI"] . "</td>
                    <td>" . $fila["fecha_n"] . "</td>
                    <td>" . $fila["email"] . "</td>
                    <td>" . $fila["tlf"] . "</td>
                </tr>";
      }
      ?>
    </table><br>

    <!--Añadimos los enlaces a las modales de clientes-->
    <?php 
      include('../Proyecto/layout/main/modal.php');
      include('../Proyecto/layout/main/modal2.php'); 
      include('../Proyecto/layout/main/modal3.php');
    ?>
    
  </div>
</div>