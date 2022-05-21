<?php 
    include('../Proyecto/layout/sesion.php');
    include('../Proyecto/app/conf/DB.php');

?>
<!DOCTYPE html>
<html lang="es">

<head> 
    <title>Sistema LGBM | Tareas</title>
    <?php   include('../Proyecto/layout/head.php');?>
    <link rel="stylesheet" href="../Proyecto/app/css/tareas.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        
        <?php   include('../Proyecto/layout/preload.php');?>
        <?php   include('../Proyecto/layout/header.php');?>
        <?php   include('../Proyecto/layout/sidebar.php');?>

        <!-- Contenido de la p�gina principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 pb-4">Tareas y proyectos</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <?php   include('../Proyecto/layout/tareas.php');?>

                </div><!-- /.container-fluid -->
            </div>
        </div>
        
        <!-- Footer -->
        <?php   include('../Proyecto/layout/footer.php');?>
        
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>

    </div>
    <!-- ./wrapper -->

    <?php include('../Proyecto/layout/scripts.php')?>
    <script src="../Proyecto/app/js/tareas.js"></script>
</body>

</html>