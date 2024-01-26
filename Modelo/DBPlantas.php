<?php
    require_once('Planta.php');
    require_once('Database.php');

    class DBPlantas extends Database{
        public function getPlantas(){
            $plantas = array();
            $sql = "SELECT * FROM plantas";

            try {
                $cursor = parent::$conexion->query($sql);

                while ($fila = $cursor->fetch_assoc()) {
                    $planta = new Planta($fila);
                    array_push($plantas, $planta);
                }
    
                $cursor->free();

            } catch (Exception $e) {
                //throw $th;
            }

            return $plantas;
        }
        
    }
?>