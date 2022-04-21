<?php?>
<div class="card">
  <div class="card-header bg-success">
    <h4>Registrados</h4>
  </div>
  <div class="card-body">

    <a href="#" class="btn btn-primary">A&ntildeadir</a>
    <a href="#" class="btn btn-primary">Modificar</a>
    <a href="#" class="btn btn-primary">Eliminar</a><br><br>

    <table class="table table-striped table-hover">
        <?php
            $c = $clientes->selectAll();

            echo "<tr><th>Nombre Completo</th><th>DNI</th><th>Fecha de Nacimiento</th><th>Email</th><th>Tel&eacutefono</th></tr>";
            foreach ($c as $fila) {
                echo"<tr>
                    <td>" .$fila["nombre"]." ".$fila["apellido_1"]." ".$fila["apellido_2"]."</td>
                    <td>" . $fila["DNI"] . "</td>
                    <td>" . $fila["fecha_n"] . "</td>
                    <td>" . $fila["email"] . "</td>
                    <td>" . $fila["tlf"] . "</td>
                </tr>";
            }
        ?>
    </table><br>
    
  </div>
</div>