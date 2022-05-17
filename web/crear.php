<?php
    $contenido = $_POST['contenido']; 
    $nombre_fichero ='../web/contenidoweb.php';

    if (file_exists($nombre_fichero)) {
        unlink($nombre_fichero);
    }
    
    $archivo = fopen($nombre_fichero,'a');

    fputs($archivo,$contenido);
    fclose($archivo);

    header('Location: paginaweb.php');
?>