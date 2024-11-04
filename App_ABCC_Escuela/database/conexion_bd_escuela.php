<!--
    Funciones MYSQLi

    Funciones PDO
        Estas funciones permiten cambiar la conectividad a diversos GESTORES DE BD

-->

<?php

    class ConexionBDEscuela{

        private $conexion;
        private $host = "sql308.infinityfree.com:3306";
        private $usuario = "if0_37635089";
        private $password = "MTFjgrBpJkmn ";
        private $bd = "if0_37635089_BD_Escuela_2024";

        public function __construct(){

            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->password, $this->bd);

            if(!$this->conexion)

                die("Error en conexion a la BD:" . musqli_connect_error());


        }

        public function getConexion(){

            return $this->conexion;
            
        }

    }

?>