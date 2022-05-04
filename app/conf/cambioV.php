<?php
include('../Proyecto/app/conf/consultasDB.php');


$sql = new consultasDB();

if (isset($_GET['sql']) && isset($_POST['correct'])) {

    switch ($_GET['sql']) {
        case 'insert':
            $sql->insertVenta($_POST['idProducto'], $_POST['nombre'], $_POST['tipo'], $_POST['cantidad'], $_POST['precio'], $_POST['fecha']);

            
            $cantidad = $_POST['cantidad'];
            $id =$_POST['idProducto'];

            $sql->menosCantidad($id, $cantidad);        //Modificamos tabla inventario

        break;
            
        case 'delete':

            $c = $sql->selectCantV($_POST['id_select']); //Capturar cantidad de producto retirada de inventario
            $c = $c->fetch_array();
            $cantidad = intval($c[0]);

            $i = $sql->selectIDV($_POST['id_select']);  //Capturar id del producto retirado
            $i = $i->fetch_array();
            $id = intval($i[0]);

            $sql->masCantidad($id,$cantidad);           //Aumentamos en inventario la cantidad de la venta cancelada

            $sql->deleteVenta($_POST['id_select']);
        break;
    }
    header("Location: http://localhost/Proyecto/index10.php");
}
