<?php
include('../Proyecto/layout/sesion.php');
include('../Proyecto/app/conf/consultasDB.php');
$clientes = new consultasDB();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema LGBM | MODIFICAR CLIENTE</title>
    <?php include('../Proyecto/layout/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <?php include('../Proyecto/layout/preload.php'); ?>
        <?php include('../Proyecto/layout/header.php'); ?>
        <?php include('../Proyecto/layout/sidebar.php'); ?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <?php include('../Proyecto/layout/main/modal2b.php'); ?>

                </div><!-- /.container-fluid -->
            </div>
        </div>

        <!-- Footer -->
        <?php include('../Proyecto/layout/footer.php'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>
    <!-- ./wrapper -->

    <?php include('../Proyecto/layout/scripts.php') ?>
    <script>
        $(document).ready(function() {
            $("#Modal2b").modal("show");
        });
    </script>
</body>

</html>