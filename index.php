<!DOCTYPE html>
<html lang="es">

<head> 
    <title>Sistema LGBM | Principal</title>
    <?php   include('../Proyecto/layout/head.php');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Precarga de página -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../Proyecto/app/templeates/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <?php   include('../Proyecto/layout/header.php');?>
        <?php   include('../Proyecto/layout/sidebar.php');?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.contenido-header -->

            <!-- Main content -->
            <?php ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022  LGBM Systems.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
        <!-- /.Footer -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php include('../Proyecto/layout/scripts.php')?>
</body>

</html>