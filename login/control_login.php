<?php
    //Algoritmo algoritmo sha512

    $email = $_POST['email'];
    $pass = $_POST['password'];

    //Encriptación de contraseña
    $hash = password_hash($pass, PASSWORD_DEFAULT, [15]);


    echo $hash;
    class Password {
        public static function hash($password) {
            return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
        }
        public static function verify($password, $hash) {
            return password_verify($password, $hash);
        }
    }

    if(password_verify($password, $hash)){
        // Password correcto!
    }

?>