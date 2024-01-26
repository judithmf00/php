<?php
    class Usuario{
        private $id;
        private $nombre;
        private $password;

        public function __construct($datos){
            if (isset($datos)){
                $this->id = $datos["id"];
                $this->nombre = $datos["nombre"];
                $this->password = $datos["password"];
            }
        }

        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setPassword($password){
            $this->id = $password;
        }
    }
?>