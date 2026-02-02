<?php

require_once(__DIR__ . "/../persistencia/conexion.php");
require_once(__DIR__ . "/../persistencia/planDAO.php");

class plan
{
    private $id_plan;
    private $id_tipo_plan;
    private $cantidad;
    private $valor;
    private $obs;
    private $id_tipo_servicio;
    private $valor_real;

    // 🔹 Constructor flexible (IMPORTANTE)
    public function __construct(
        $id_plan = 0,
        $id_tipo_plan = null,
        $cantidad = null,
        $valor = 0,
        $obs = "",
        $id_tipo_servicio = null,
        $valor_real = null
    ) {
        $this->id_plan = $id_plan;
        $this->id_tipo_plan = $id_tipo_plan;
        $this->cantidad = $cantidad;
        $this->valor = $valor;
        $this->obs = $obs;
        $this->id_tipo_servicio = $id_tipo_servicio;
        $this->valor_real = $valor_real;
    }

    // ================= GETTERS =================

    public function getIdPlan()
    {
        return $this->id_plan;
    }

    public function getIdTipoPlan()
    {
        return $this->id_tipo_plan;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getObs()
    {
        return $this->obs;
    }

    public function getIdTipoServicio()
    {
        return $this->id_tipo_servicio;
    }

    public function getValorReal()
    {
        return $this->valor_real;
    }

    // ================= SETTERS =================

    public function setIdPlan($id_plan)
    {
        $this->id_plan = $id_plan;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function setObs($obs)
    {
        $this->obs = $obs;
    }

    public function setIdTipoServicio($id_tipo_servicio)
    {
        $this->id_tipo_servicio = $id_tipo_servicio;
    }

    public function setValorReal($valor_real)
    {
        $this->valor_real = $valor_real;
    }

    // ================= MÉTODO CONSULTAR =================
    // 🔹 ESTE es el que llena el <select>

    public function consultar()
    {
        $conexion = new Conexion();
        $dao = new PlanDAO();

        $conexion->abrir();
        $conexion->ejecutar($dao->consultar());

        $planes = [];
        while ($fila = $conexion->registro()) {
            $planes[] = $fila;
        }

        $conexion->cerrar();
        return $planes;
    }
}
