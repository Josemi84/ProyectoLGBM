<?php
include "DB.php";


class consultasDB extends DB
{

    function __construct()
    {
        parent::__construct();
    }

    //Consultas aplicadas a la Base de Datos

    public function selectAll($table)
    {
        switch ($table) 
        {
            case 'clientes':
                $consulta = "SELECT * FROM " . $table . ";";
                break;

            case 'compras':
                $consulta = "SELECT * FROM " . $table . " ORDER BY fecha DESC, id_compra ASC;";
                break;

            case 'ventas':
                $consulta = "SELECT * FROM " . $table . " ORDER BY fecha DESC, id_venta ASC;";
                break;
        }
        return $this->realizarConsulta($consulta);
    }

    //Tabla clientes

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
        $consulta = "DELETE FROM `clientes` WHERE `clientes`.`id_cliente` = " . $id . ";";
        return $this->realizarConsulta($consulta);
    }

    public function insertCliente($nombre, $apellido1, $apellido2, $dni, $fechaN, $email, $tlf)
    {
        $consulta = "INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido_1`, `apellido_2`, `DNI`, `fecha_n`, `email`, `tlf`) VALUES (NULL, '" . $nombre . "', '" . $apellido1 . "', '" . $apellido2 . "', '" . $dni . "', '" . $fechaN . "', '" . $email . "', '" . $tlf . "')";
        return $this->realizarConsulta($consulta);
    }
    

    //Tabla compras

    public function deleteCompra($id)
    {
        $consulta = "DELETE FROM `compras` WHERE `id_compra` = " . $id . ";";
        return $this->realizarConsulta($consulta);
    }

    public function insertCompra($id_producto, $nombre, $tipo, $cantidad, $precio, $fecha)
    {
        $consulta = "INSERT INTO `compras` (`id_compra`,`id_producto`, `nombre`,  `tipo`, `cantidad`, `precio_u`, `fecha`) VALUES (NULL, '" . $id_producto . "', '" . $nombre . "', '" . $tipo . "', '" . $cantidad . "', '" . $precio . "', '" . $fecha . "')";
        return $this->realizarConsulta($consulta);
    }

    public function selectCant($id_compra)
    {
        $consulta = "SELECT cantidad FROM `compras` WHERE id_compra=" . $id_compra . ";";
        return $this->realizarConsulta($consulta);
    }

    public function selectIDC($id_compra)
    {
        $consulta = "SELECT id_producto FROM `compras` WHERE id_compra=" . $id_compra . ";";
        return $this->realizarConsulta($consulta);
    }

    //Tabla Ventas

    public function deleteVenta($id)
    {
        $consulta = "DELETE FROM `ventas` WHERE `id_venta` = " . $id . ";";
        return $this->realizarConsulta($consulta);
    }

    public function insertVenta($id_producto, $nombre, $tipo, $cantidad, $precio, $fecha)
    {
        $consulta = "INSERT INTO `ventas` (`id_venta`,`id_producto`, `nombre`,  `tipo`, `cantidad`, `precio_u`, `fecha`) VALUES (NULL, '" . $id_producto . "', '" . $nombre . "', '" . $tipo . "', '" . $cantidad . "', '" . $precio . "', '" . $fecha . "')";
        return $this->realizarConsulta($consulta);
    }

    public function selectCantV($id_venta)
    {
        $consulta = "SELECT cantidad FROM `ventas` WHERE id_venta=" . $id_venta . ";";
        return $this->realizarConsulta($consulta);
    }

    public function selectIDV($id_venta)
    {
        $consulta = "SELECT id_producto FROM `ventas` WHERE id_venta=" . $id_venta . ";";
        return $this->realizarConsulta($consulta);
    }

    //Inventario

    public function comprobarPID($id)
    {
        $consulta = "SELECT * FROM `inventario` WHERE id_producto =" . $id . ";";
        return $this->realizarConsulta($consulta);
    }

    public function insertInv($id_producto, $nombre, $tipo, $cantidad)
    {
        $consulta = "INSERT INTO `inventario` (`id_producto`, `nombre`,  `tipo`, `cantidad`) VALUES (" . $id_producto . ", '" . $nombre . "', '" . $tipo . "', " . $cantidad . ")";
        return $this->realizarConsulta($consulta);
    }

    public function masCantidad($id, $cantidad)
    {
        $consulta = "UPDATE `inventario` SET cantidad = cantidad+" . $cantidad . " WHERE id_producto =" . $id ;
        return $this->realizarConsulta($consulta);
    }

    public function menosCantidad($id, $cantidad)
    {
        $consulta = "UPDATE `inventario` SET cantidad = cantidad-" . $cantidad . " WHERE id_producto =" . $id;
        return $this->realizarConsulta($consulta);
    }

    public function selectMP()
    {
        $consulta = "SELECT * FROM `inventario` WHERE tipo ='MP';";
        return $this->realizarConsulta($consulta);
    }

    public function selectPE()
    {
        $consulta = "SELECT * FROM `inventario` WHERE tipo ='PE';";
        return $this->realizarConsulta($consulta);
    }

    //Tabla usuarios

    public function selectEmail($email)
    {
        $consulta = "SELECT * FROM `usuarios` WHERE email=" . $email . ";";
        return $this->realizarConsulta($consulta);
    }

    public function insertUsuario($email, $password_hash)
    {
        $consulta = "INSERT INTO `usuarios` (`user_id`, `email`,  `password`) VALUES (NULL, '.$email.', '$password_hash')";
        return $this->realizarConsulta($consulta);
    }
    
}
