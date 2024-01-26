<?php
    class Pedidos{
        private $id;
        private $id_usuario;
        private $id_planta;
        private $cantidad;

        public function __construct($datos){
            if (isset($datos)){
                $this->id = $datos["id"];
                $this->id_usuario = $datos["id_usuario"];
                $this->id_planta = $datos["id_planta"];
                $this->cantidad = $datos["cantidad"];
            }
        }

        public function getId(){
            return $this->id;
        }

        public function getId_usuario(){
            return $this->id_usuario;
        }

        public function getId_planta(){
            return $this->id_planta;
        }

        public function getCantidad(){
            return $this->cantidad;
        }
    }

?>