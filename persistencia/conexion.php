<?php

class Conexion{
    private $conexion;
    private $resultado;
    
    public function abrir(){
            $this -> conexion = new mysqli("localhost", "root", "", "webmasterr");
       
    }
    
    public function cerrar(){
        $this -> conexion -> close();
    }
    
   public function ejecutar($sentencia){
    $this->resultado = $this->conexion->query($sentencia);

    if (!$this->resultado) {
        die("Error en SQL: " . $this->conexion->error);
    }
}

    
    public function registro(){
        return $this -> resultado -> fetch_row();
    }
    
    public function filas(){
        return $this -> resultado -> num_rows;
    }
    
}


?>