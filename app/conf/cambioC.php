
<?php
include('../Proyecto/app/conf/consultasDB.php');


$sql = new consultasDB();

if (isset($_GET['sql']) && isset($_POST['correct'])) {

    switch ($_GET['sql']) {
        case 'insert':
            $sql->insertCliente($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['dni'], $_POST['fecha_nac'], $_POST['email'], $_POST['tlf']);
            break;

        case 'update':
            $sql->updateCliente($_POST['id'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['dni'], $_POST['fecha_nac'], $_POST['email'], $_POST['tlf']);
            break;

        case 'delete':
            $sql->deleteCliente($_POST['id_select']);
            break;
    }
    header("Location: http://localhost/Proyecto/index2.php");
}

?>