<!-- Conexión con la Base de Datos -->
<?php include('../Proyecto/app/conf/consultasDB.php');?>
<!DOCTYPE html>
<html lang="es">

<head> 
    <title>Sistema LGBM | Principal</title>

    <!-- Head global -->
    <?php   include('../Proyecto/layout/head.php');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Elementos de precarga de la página -->
        <?php   include('../Proyecto/layout/preload.php');?>

        <!-- Header -->
        <?php   include('../Proyecto/layout/header.php');?>

        <!-- Sidebar -->
        <?php   include('../Proyecto/layout/sidebar.php');?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">P&aacutegina Web</h1>
                        </div>
                    </div>
                    <?php ?>

                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php   include('../Proyecto/layout/footer.php');?>
        
        <!-- Sidebar de control-->
        <aside class="control-sidebar control-sidebar-dark">
            
        </aside>
    </div>

    <!-- Scripts -->
    <?php include('../Proyecto/layout/scripts.php')?>
</body>

</html>