<?php
require_once(__DIR__ . "/Conexion.php");
class ClienteDAO
{
    public function consultar()
    {
        return "
        SELECT 
        
            c.id_cliente,
            c.nombre_1,
            c.nombre_2,
            c.apellido_1,
            c.apellido_2,
            c.identificacion,
            ec.id_estado_cliente,
            p.valor,
            c.dia_corte,
            c.direccion,
                        CONCAT(ba.red, ba.prefijo, '0', c.num_cliente) AS codigo

        FROM cliente c
        JOIN barrio ba ON ba.id_barrio = c.id_barrio
        JOIN estado_cliente ec ON ec.id_estado_cliente = c.id_estado_cliente
        JOIN plan p ON p.id_plan = c.id_plan
    
    WHERE c.id_estado_cliente IN (1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30)
            ";
    }
        public function consultarCortes()
    {
        return "
        SELECT 
        
            c.id_cliente,
            c.nombre_1,
            c.nombre_2,
            c.apellido_1,
            c.apellido_2,
            c.identificacion,
            ec.id_estado_cliente,
            p.valor,
            c.dia_corte,
            c.direccion,
                        CONCAT(ba.red, ba.prefijo, '0', c.num_cliente) AS codigo

        FROM cliente c
        JOIN barrio ba ON ba.id_barrio = c.id_barrio
        JOIN estado_cliente ec ON ec.id_estado_cliente = c.id_estado_cliente
        JOIN plan p ON p.id_plan = c.id_plan
    
    WHERE c.id_estado_cliente IN (2,3)
            ";
    }



    public function activos()
    {
        return "
    SELECT 
    nombre_1,
    apellido_1,
    estado_cliente
    FROM cliente c
    INNER JOIN estado_cliente ec
    ON c.id_estado_cliente = ec.id_estado_cliente
    WHERE c.id_estado_cliente IN (1,2)";
    }


    public function cambiarEstado($idCliente, $estado)
    {
        return "UPDATE cliente 
            SET id_estado_cliente = $estado 
            WHERE id_cliente = $idCliente";
    }

    public function insertar($cliente)
    {
        return "
        INSERT INTO cliente (
            nombre_1,
            nombre_2,
            apellido_1,
            apellido_2,
            identificacion,
            id_estado_cliente,
            id_plan,
            dia_corte,
            direccion
        ) VALUES (
            '{$cliente->getNombre1()}',
            '{$cliente->getNombre2()}',
            '{$cliente->getApellido1()}',
            '{$cliente->getApellido2()}',
            '{$cliente->getIdentificacion()}',
            {$cliente->getIdEstadoCliente()},
            {$cliente->getValor()},
            '{$cliente->getDia_corte()}',
            '{$cliente->getDireccion()}'
        )
    ";
    }
}
