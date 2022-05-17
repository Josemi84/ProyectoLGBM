<?php
    session_start();
    
    if (isset($_SESSION['user_id']) and $_SESSION['control']==true) 
    {
        
    }else {
        header("Location: http://localhost/Proyecto/login");
    }

?>