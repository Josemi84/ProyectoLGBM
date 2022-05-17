<?php include('../app/conf/consultasDB.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistema LGBM | Registro</title>
  <?php include('../layout/head.php'); ?>

</head>

<body class="hold-transition login-page bg-info">
  <div class="login-box ">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary text-dark">
      <div class="card-header text-center">
        <a href="#" class="h1">Sistema <b>LGBM</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Registro de Usuarios</p>

        <form action="../registro/control_registro.php" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe estar compuesta por 8 caracteres mínimo, y contener al menos 1 número, 1 letra mayúscula y 1 minúscula" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" id="confirm_password" name="password" placeholder="Repita su contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe estar compuesta por 8 caracteres mínimo, y contener al menos 1 número, 1 letra mayúscula y 1 minúscula" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Recordar
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" name="register" value="register " class="btn btn-primary btn-block bg-success">Registrarse</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>


        <!--
      <p class="mb-1">
        <a href="forgot-password.html">Contraseña olvidada</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registro nuevos usuarios</a>
      </p>
      -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- Scripts -->
  <?php include('../layout/scripts.php') ?>
  <script>
    var password = document.getElementById("password"),
      confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
      if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Las contraseñas no coinciden");
      } else {
        confirm_password.setCustomValidity('');
      }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
  </script>

</body>

</html>