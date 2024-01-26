<?php

    class Database{
        /* Conexión a la base de datos */
        protected static $conexion;

        /* Credenciales */
        private $servidor="localhost";
        private $usuario="root";
        private $password="toor";
        private $basedatos="tiendaPlantas";

        public function __construct()
        {
            // Configurar mysqli para lanzar excepciones en lugar de manejar errores
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

            try {
                // Utilizamos self en lugar de this porque es un atributo estático
                self::$conexion = new mysqli($this->servidor, 
                                             $this->usuario, 
                                             $this->password, 
                                             $this->basedatos);
     
            }catch (Exception $e) {
                die("Error al conectar con la base de datos, consulte bla, bla, bla");
            }
        }

        protected function getConexion() {
            return self::$conexion;
        }
    }

?>