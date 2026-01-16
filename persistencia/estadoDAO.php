<?php


require_once("persistencia/Conexion.php");
require_once("persistencia/estadoDAO.php");
class estadoDAO{
    public function consultarEstado(){
        return "SELECT id_estado_cliente, descripcion, color FROM estado_cliente";
    }




}


?>