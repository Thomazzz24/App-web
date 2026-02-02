<?php

require_once("persistencia/conexion.php");
require_once("persistencia/ClienteDAO.php");
class barrio
{

    private $id_barrio;
    private $barrio;
    private $prefijo;
    private $red;

    public function __construct($id_barrio = 0, $barrio = "", $prefijo = "", $red = "")
    {
        $this->id_barrio = $id_barrio;
        $this->barrio = $barrio;
        $this->prefijo = $prefijo;
        $this->red = $red;
    }

    public function getId_barrio()
    {
        return $this->id_barrio;
    }
    public function getBarrio()
    {
        return $this->barrio;
    }
    public function getPrefijo()
    {
        return $this->prefijo;
    }
    public function getRed()
    {
        return $this->red;
    }
    public function setId_barrio($id_barrio)
    {
        $this->id_barrio = $id_barrio;
    }

    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;
    }
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;
    }
    public function setRed($red)
    {
        $this->red = $red;
    }
    
    public function consultarPorCiudad($id_ciudad) {
        
    $conexion = new Conexion();
            $conexion->abrir();
    return $conexion->ejecutar(
        "SELECT id_barrio, barrio FROM barrio WHERE id_ciudad = $id_ciudad ORDER BY barrio"
    );
}

}
