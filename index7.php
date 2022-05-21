<?php
include('../Proyecto/layout/sesion.php');
include('../Proyecto/app/conf/DB.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema LGBM | Calendario</title>
    <?php include('../Proyecto/layout/head.php'); ?>
    <link rel="stylesheet" href="../Proyecto/app/css/calendario.css">

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
                <div class="container-fluid p-5">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Calendario y eventos</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                    <?php include('../Proyecto/layout/calendar.php'); ?>

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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="../Proyecto/app/js/calendario.js"></script>
</body>

</html>