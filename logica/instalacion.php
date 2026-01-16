<?php

require_once(__DIR__ . "/../persistencia/Conexion.php");
require_once(__DIR__ . "/../persistencia/InstalacionDAO.php");

class Instalacion
{
    private $id_instalacion;
    private $id_estado_instalacion;
    private $id_plan;
    private $id_ciudad;
    private $id_barrio;
    private $identificacion;
    private $nombre;
    private $telefono_1;
    private $telefono_2;
    private $direccion;
    private $id_usuario;

    public function __construct(
        $id_instalacion = 0,
        $id_estado_instalacion = 1,
        $id_plan = 0,
        $id_ciudad = 0,
        $id_barrio = 0,
        $identificacion = "",
        $nombre = "",
        $telefono_1 = "",
        $telefono_2 = "",
        $direccion = "",
        $id_usuario = 0
    ) {
        $this->id_instalacion = $id_instalacion;
        $this->id_estado_instalacion = $id_estado_instalacion;
        $this->id_plan = $id_plan;
        $this->id_ciudad = $id_ciudad;
        $this->id_barrio = $id_barrio;
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->telefono_1 = $telefono_1;
        $this->telefono_2 = $telefono_2;
        $this->direccion = $direccion;
        $this->id_usuario = $id_usuario;
    }

    /* ===== GETTERS ===== */

    public function getIdEstadoInstalacion() { return $this->id_estado_instalacion; }
    public function getIdPlan() { return $this->id_plan; }
    public function getIdCiudad() { return $this->id_ciudad; }
    public function getIdBarrio() { return $this->id_barrio; }
    public function getIdentificacion() { return $this->identificacion; }
    public function getNombre() { return $this->nombre; }
    public function getTelefono1() { return $this->telefono_1; }
    public function getTelefono2() { return $this->telefono_2; }
    public function getDireccion() { return $this->direccion; }
    public function getIdUsuario() { return $this->id_usuario; }

    /* ===== MÉTODOS ===== */

    public function crear()
    {
        $conexion = new Conexion();
        $dao = new InstalacionDAO();

        $conexion->abrir();
        $resultado = $conexion->ejecutar($dao->insertar($this));
        $conexion->cerrar();

        return $resultado;
    }
}
