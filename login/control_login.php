<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'lgbm');
     
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }

    if (isset($_POST['login'])) {
 
        $email = $_POST['email'];
        $password = $_POST['password'];
        
    
        $query = $connection->prepare("SELECT * FROM `usuarios` WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
    
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        if (!$result)
        {
            echo '<script>alert("Correo no registrado")</script>';
            //header("Location: http://localhost/Proyecto/login");

        } else {
            if (password_verify($password, $result['password'])) 
            {
                session_start();
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['control'] = true;
                header("Location: http://localhost/Proyecto/");
            } else {
                echo '<script>alert("Contraseña incorrecta");</script>';
                //header("Location: http://localhost/Proyecto/login");
            }
        }
        echo '<script>alert("Error");</script>';
        //header("Location: http://localhost/Proyecto/login");
    }
?>