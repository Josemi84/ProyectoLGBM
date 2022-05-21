<!DOCTYPE html>
<html>

<head>
    <title>Sistema LGBM | Página Web Pública</title>

    <?php include('../Proyecto/layout/head.php'); ?>

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Proyecto/app/css/sidebars.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include('../Proyecto/layout/sidebarWEB.php'); ?>

        <!-- Contenido de la página principal -->
        <div class="content-wrapper">
            <!--Contenido Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 my-3 ml-3">
                            <h1 class="m-0 "> Página Web Pública</h1>
                        </div>
                    </div>
                    <div class="container">
                        <?php include('../Proyecto/web/contenidoweb.php'); ?>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    
    


    <!-- Scripts -->

    <script src="../Proyecto/app/js/sidebars.js"></script>
    <script src="../Proyecto/app/assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>