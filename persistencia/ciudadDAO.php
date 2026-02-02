<?php
class CiudadDAO {

    public function consultar() {
        return "SELECT id_ciudad, ciudad FROM ciudad ORDER BY ciudad";
    }
}
