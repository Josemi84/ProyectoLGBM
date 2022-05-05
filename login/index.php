<?php include('../app/conf/consultasDB.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema LGBM | Login</title>
  <?php   include('../layout/head.php');?>

</head>

<body class="hold-transition login-page bg-info">
<div class="login-box ">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary text-dark">
    <div class="card-header text-center">
      <a href="#" class="h1">Sistema <b>LGBM</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicio de sesión</p>

      <form action="../login/control_login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Correo Electrónico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
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
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
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
<?php include('../layout/scripts.php')?>
</body>
</html>
