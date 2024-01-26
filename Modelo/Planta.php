<?php
    class Planta{
        private $id;
        private $nombre;
        private $precio;
        private $descripcion;
        private $imagen;

        public function __construct($datos){
            if (isset($datos)){
                $this->id = $datos["id"];
                $this->nombre = $datos["nombre"];
                $this->precio = $datos["precio"];
                $this->descripcion = $datos["descripcion"];
                $this->imagen = $datos["imagen"];
            }
        }

        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getDescripcion(){
            return $this->descripcion;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }
?>