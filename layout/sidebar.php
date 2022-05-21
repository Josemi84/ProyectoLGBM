<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Proyecto/index.php" class="brand-link">
        <img src="../Proyecto/app/templeates/AdminLTE-3.2.0/dist/img/LLogo.png" alt="LGBM Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LGBM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image col-4">
                <img src="../Proyecto/img/img<?php echo rand(1, 2) ?>.jpg" class="rounded" alt="Imagen del usuario" style="width: 100%;">
            </div>
            <div class="info col-8">
                <a href="#" class="d-block text-decoration-none mt-2"><?php echo 'Nombre usuario ' . $_SESSION['user_id']; ?></a>
            </div>

        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Búsqueda" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->

                <li class="nav-header">MENÚ DE NAVEGACIÓN</li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Relaciones Laborales
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="../Proyecto/index2.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <!--<li class="nav-item ">
                            <a href="../Proyecto/index3.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Newsletter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Proyecto/index4.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Campañas</p>
                            </a>
                        </li>-->
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Estadísticas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../Proyecto/index5.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Generales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Proyecto/index6.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tareas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Proyecto/index7.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Calendario</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Almacén
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../Proyecto/index8.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Proyecto/index9.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../Proyecto/index10.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ventas</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>