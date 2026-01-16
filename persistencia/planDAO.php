<?php

require_once("persistencia/Conexion.php");

class planDAO
{
    public function consultarPlanes()
    {
        return "SELECT id_plan, nombre_plan, valor FROM plan";
    }
}

?>