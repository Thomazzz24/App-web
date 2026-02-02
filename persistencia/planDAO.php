<?php
class PlanDAO {

    public function consultar() {
        return "
            SELECT 
                id_plan,
                CONCAT(cantidad,'M ',obs) AS nombre,
                valor
            FROM plan
            ORDER BY cantidad
        ";
    }
}
