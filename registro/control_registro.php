<?php


define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'lgbm');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);      //Conexión con DB
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

session_start();
 
if (isset($_POST['register'])) {
 
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT, ['cost' =>15]);
 
    $query = $connection->prepare("SELECT * FROM `usuarios` WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {       //Comprobación si existe el email en la DB
        echo '<script>alert("El email ya se encuentra registrado!")</script>';
        session_destroy();
        header("Location: http://localhost/Proyecto/registro");
    }
 
    if ($query->rowCount() == 0)    //Insercción de email y pass
    {      
        $query = $connection->prepare("INSERT INTO `usuarios` (`user_id`, `email`,  `password`) VALUES (null, :email, :password_hash)");
        
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<script>alert("Registro completado!")</script>';
        } else {

            echo '<script>alert("Registro no realizado!")</script>';
            session_destroy();
            header("Location: http://localhost/Proyecto/registro");
        }
    }

    //Cerramos la conexión
    $connection = null;
    $query = null;

    session_destroy();
    header("Location: http://localhost/Proyecto/login");
}
?>