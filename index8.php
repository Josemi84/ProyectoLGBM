<?php 
    include('../Proyecto/layout/sesion.php');
    include('../Proyecto/app/conf/consultasDB.php');
    $inventario = new consultasDB();
?>
<!DOCTYPE html>
<html lang="es">

<head> 
    <title>Sistema LGBM | Inventario</title>
    <?php   include('../Proyecto/layout/head.php');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        
        <?php   include('../Proyecto/layout/preload.php');?>
        <?php   include('../Proyecto/layout/header.php');?>
        <?php   include('../Proyecto/layout/sidebar.php');?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Disponible</h1>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    <?php include('../Proyecto/layout/main/inventario.php'); ?>
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
</body>

</html>