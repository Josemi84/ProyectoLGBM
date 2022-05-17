<?php
include('../Proyecto/layout/sesion.php');
include('../Proyecto/app/conf/consultasDB.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Sistema LGBM | Principal</title>

    <!-- Head global -->
    <?php include('../Proyecto/layout/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Elementos de precarga de la página -->
        <?php //include('../Proyecto/layout/preload.php'); ?>

        <!-- Header -->
        <?php include('../Proyecto/layout/header.php'); ?>

        <!-- //Sidebar -->
        <?php include('../Proyecto/layout/sidebar.php'); ?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mb-6">
                            <h1 class="m-0"> Editor de Página Web </h1>
                        </div>
                    </div>
                    <div class="container-fluid mb-6" >
                        <button type="button" class="btn btn-danger" id="bt-1">Añadir</button>
                        <button type="button" class="btn btn-warning" id="bt-2">Limpiar</button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="bt-3">
                                Crear Web
                            </button>
                            <ul class="dropdown-menu">
                                <form action="../Proyecto/web/crear.php" method="post" target="_blank" class="">
                                    <textarea name="contenido" id="text-web"></textarea>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="content" id="principal"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('../Proyecto/layout/footer.php'); ?>

    <!-- Sidebar de control-->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>

    <!-- Scripts -->
    <?php require('../Proyecto/layout/scripts.php') ?>
</body>

</html>