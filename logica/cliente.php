


<?php

require_once(__DIR__ . "/../persistencia/Conexion.php");
require_once(__DIR__ . "/../persistencia/ClienteDAO.php");

class Cliente
{

    private $id_cliente;
    private $nombre_1;
    private $nombre_2;
    private $apellido_1;
    private $apellido_2;
    private $identificacion;
    private $id_estado_cliente;
    private $id_plan;
    private $codigo;
    private $dia_corte;
    private $direccion;

    public function __construct(
        $id_cliente = 0,
        $nombre_1 = "",
        $nombre_2 = "",
        $apellido_1 = "",
        $apellido_2 = "",
        $identificacion = "",
        $id_estado_cliente = "",
        $id_plan = 0,
        $codigo = "",
        $dia_corte = "",
        $direccion = ""
    ) {
        $this->id_cliente = $id_cliente;
        $this->nombre_1 = $nombre_1;
        $this->nombre_2 = $nombre_2;
        $this->apellido_1 = $apellido_1;
        $this->apellido_2 = $apellido_2;
        $this->identificacion = $identificacion;
        $this->id_estado_cliente = $id_estado_cliente;
        $this->id_plan = $id_plan;
        $this->codigo = $codigo;
        $this->dia_corte = $dia_corte;
        $this->direccion = $direccion;
    }
    public function getId_Cliente()
    {
        return $this->id_cliente;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function getDia_corte()
    {
        return $this->dia_corte;
    }
    public function setDia_corte($dia_corte)
    {
        $this->dia_corte = $dia_corte;
    }
    public function getNombre1()
    {
        return $this->nombre_1;
    }
    public function getApellido1()
    {
        return $this->apellido_1;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function getEstadoCliente()
    {
        return $this->id_estado_cliente;
    }
    public function getValorPlan()
    {
        return $this->id_plan;
    }
    public function getNombre2()
    {
        return $this->nombre_2;
    }
    public function getApellido2()
    {
        return $this->apellido_2;
    }
    public function getIdEstadoCliente()
    {
        return $this->id_estado_cliente;
    }
    public function getValor()
    {
        return $this->id_plan;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }



    public function setIdEstadoCliente($id_estado_cliente)
    {
        $this->id_estado_cliente = $id_estado_cliente;
    }

    public function setIdPlan($id_plan)
    {
        $this->id_plan = $id_plan;
    }

    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }
    public function setNombre1($nombre_1)
    {
        $this->nombre_1 = $nombre_1;
    }
    public function setApellido1($apellido_1)
    {
        $this->apellido_1 = $apellido_1;
    }
    public function setNombre2($nombre_2)
    {
        $this->nombre_2 = $nombre_2;
    }
    public function setApellido2($apellido_2)
    {
        $this->apellido_2 = $apellido_2;
    }

    public function setId_Cliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }
    public function setValorPlan($id_plan)
    {
        $this->id_plan = $id_plan;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }



    public function consultarActivos()
    {
        $conexion = new Conexion();
        $dao = new ClienteDAO();

        $conexion->abrir();
        $conexion->ejecutar($dao->consultar());

        $clientes = [];
        while (($fila = $conexion->registro()) != null) {
            $clientes[] = new Cliente(
                $fila[0],
                $fila[1],
                $fila[2],
                $fila[3],
                $fila[4],
                $fila[5],
                $fila[6],
                $fila[7],
                $fila[8],
                $fila[9],
                $fila[10]
            );
        }

        $conexion->cerrar();
        return $clientes;
    }
        public function consultarCortes()
    {
        $conexion = new Conexion();
        $dao = new ClienteDAO();

        $conexion->abrir();
        $conexion->ejecutar($dao->consultar());

        $clientes = [];
        while (($fila = $conexion->registro()) != null) {
            $clientes[] = new Cliente(
                $fila[0],
                $fila[1],
                $fila[2],
                $fila[3],
                $fila[4],
                $fila[5],
                $fila[6],
                $fila[7],
                $fila[8],
                $fila[9],
                $fila[10]
            );
        }

        $conexion->cerrar();
        return $clientes;
    }



    public function cambiarEstado($estado)
    {
        $conexion = new Conexion();
        $dao = new ClienteDAO();

        $conexion->abrir();
        $resultado = $conexion->ejecutar(
            $dao->cambiarEstado($this->id_cliente, $estado)
        );
        $conexion->cerrar();

        if ($resultado) {
            $this->id_estado_cliente = $estado;
        }

        return $resultado;
    }
    public function crear()
    {
        $conexion = new Conexion();
        $dao = new ClienteDAO();

        $conexion->abrir();
        $resultado = $conexion->ejecutar($dao->insertar($this));
        $conexion->cerrar();

        return $resultado;
    }
}
