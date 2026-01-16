<?php
require_once("persistencia/Conexion.php");
require_once("persistencia/estadoDAO.php");

class estado
{
    private $id;
    private $descripcion;
    private $color;

    public function __construct($id_estado_cliente, $descripcion, $color)
    {
        $this->id = $id_estado_cliente;
        $this->descripcion = $descripcion;
        $this->color = $color;
    }


    public function __getid_estado_cliente()
    {
        return $this->id;
    }

    public function __getdescripcion()
    {
        return $this->descripcion;
    }
    public function __getcolor()
    {
        return $this->color;
    }
}
