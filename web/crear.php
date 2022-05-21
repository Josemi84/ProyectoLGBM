<?php
if (!isset($_POST['generador'])) 
{
    header("Location: http://localhost/Proyecto/");
} else {
    $contenido = $_POST['contenido'];           //Elementos de la web editable

    $nombre_fichero = '../web/contenidoweb.php';

    if (file_exists($nombre_fichero)) {
        unlink($nombre_fichero);                //Desechamos si ya existía el archivo
    }

    $archivo = fopen($nombre_fichero, 'a');      //Creamos el archivo y lo editamos

    fputs($archivo, $contenido);                 //Añadimos el contenido html de todos los elementos que hemos
    //incluido en la web editable a nuestra web principal
    fclose($archivo);

    header('Location: http://localhost/Proyecto/paginaweb.php');
}
