<?php


require_once("persistencia/Conexion.php");
class plan
{


    private $id_plan;
    private $id_tipo_plan;
    private $cantidad;
    private $valor;
    private $obs;
    private $id_tipo_servicio;
    private $valor_real;

    public function __construct($id_plan, $id_tipo_plan, $cantidad, $valor, $obs, $id_tipo_servicio, $valor_real)
    {
        $this->id_plan = $id_plan;
        $this->id_tipo_plan = $id_tipo_plan;
        $this->cantidad = $cantidad;
        $this->valor = $valor;
        $this->obs = $obs;
        $this->id_tipo_servicio = $id_tipo_servicio;
        $this->valor_real = $valor_real;
    }

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

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    public function getObs()
    {
        return $this->obs;
    }
    public function setObs($obs)
    {
        $this->obs = $obs;
    }
    public function getIdTipoServicio()
    {
        return $this->id_tipo_servicio;
    }
    public function setIdTipoServicio($id_tipo_servicio)
    {
        $this->id_tipo_servicio = $id_tipo_servicio;
    }
    public function getValorReal()
    {
        return $this->valor_real;
    }

    public function setValorReal($valor_real)
    {
        $this->valor_real = $valor_real;
    }
}
