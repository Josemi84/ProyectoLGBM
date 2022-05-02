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

    public function selectID($id)
    {
        $consulta = "SELECT * FROM `clientes` WHERE id_cliente=" . $id . "";
        return $this->realizarConsulta($consulta);
    }

    public function updateCliente($id, $nombre, $apellido1, $apellido2, $dni, $fechaN, $email, $tlf)
    {
        $consulta = "UPDATE `clientes` SET `nombre` = '" . $nombre . "', `apellido_1` = '" . $apellido1 . "', `apellido_2` = '" . $apellido2 . "', `DNI` = '" . $dni . "', `fecha_n` = '" . $fechaN . "', `email` = '" . $email . "', `tlf` = '" . $tlf . "' WHERE `clientes`.`id_cliente` = " . $id;
        return $this->realizarConsulta($consulta);
    }

    public function deleteCliente($id)
    {
        $consulta = "DELETE FROM `clientes` WHERE `clientes`.`id_cliente` = ".$id.";";
        return $this->realizarConsulta($consulta);
    }

    public function insertCliente($nombre, $apellido1, $apellido2, $dni, $fechaN, $email, $tlf)
    {
        $consulta = "INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido_1`, `apellido_2`, `DNI`, `fecha_n`, `email`, `tlf`) VALUES (NULL, '" . $nombre . "', '" . $apellido1 . "', '" . $apellido2 . "', '" . $dni . "', '" . $fechaN . "', '" . $email . "', '" . $tlf . "')";
        $this->realizarConsulta($consulta);
    }
}
