<?php
include "DB.php";


class consultasDB extends DB
{

    function __construct()
    {
        parent::__construct();
    }

    //Consultas aplicadas a la Base de Datos

    public function selectAll()
    {
        $consulta = "SELECT * FROM clientes";
        return $this->realizarConsulta($consulta);
    }
   
}
?>