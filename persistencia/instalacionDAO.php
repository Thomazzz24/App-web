<?php

class InstalacionDAO
{
    public function insertar($i)
    {
        return "
        INSERT INTO instalacion (
            id_estado_instalacion,
            id_plan,
            id_ciudad,
            id_barrio,
            identificacion,
            nombre,
            telefono_1,
            telefono_2,
            direccion,
            fecha_r,
            id_usuario
        ) VALUES (
            {$i->getIdEstadoInstalacion()},
            {$i->getIdPlan()},
            {$i->getIdCiudad()},
            {$i->getIdBarrio()},
            '{$i->getIdentificacion()}',
            '{$i->getNombre()}',
            '{$i->getTelefono1()}',
            '{$i->getTelefono2()}',
            '{$i->getDireccion()}',
            NOW(),
            {$i->getIdUsuario()}
        )
        ";
    }

    public function consultarPendientes()
    {
        return "
        SELECT id_instalacion, nombre, identificacion, direccion
        FROM instalacion
        WHERE id_estado_instalacion = 1
        ";
    }
}
