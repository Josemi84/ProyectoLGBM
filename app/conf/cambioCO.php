<?php
include('../Proyecto/app/conf/consultasDB.php');


$sql = new consultasDB();

if (isset($_GET['sql']) && isset($_POST['correct'])) {

    switch ($_GET['sql']) {
        case 'insert':
                                                        //Añadimos compra a BBDD
            $sql->insertCompra($_POST['idProducto'], $_POST['nombre'], $_POST['tipo'], $_POST['cantidad'], $_POST['precio'], $_POST['fecha']);

                                                        //Modificamos tabla inventario
            $producto = $sql->comprobarPID($_POST['idProducto']); 
            $producto = $producto->fetch_array();
            $valorProducto = intval($producto[0]);
                                                        //Comprobamos si el registro existe o no
            if (empty($valorProducto)) {
                $sql->insertInv($_POST['idProducto'], $_POST['nombre'], $_POST['tipo'], $_POST['cantidad']);
            } else {
                
                $sql->masCantidad($_POST['idProducto'], $_POST['cantidad']);
            }
    
        break;

        case 'delete':
             
            $c = $sql->selectCant($_POST['id_select']); //Capturar cantidad de producto añadida a inventario
            $c = $c->fetch_array();
            $cantidad = intval($c[0]);

            $i = $sql->selectIDC($_POST['id_select']);  //Capturar id del producto añadido
            $i = $i->fetch_array();
            $id = intval($i[0]);

            $sql->menosCantidad($id, $cantidad);        //Modificamos tabla inventario

            $sql->deleteCompra($_POST['id_select']);    //Eliminamos en tabla compra
        break;
    }
    header("Location: http://localhost/Proyecto/index9.php");
}
