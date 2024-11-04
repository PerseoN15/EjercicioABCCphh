<?php
/*
        Funciones MYSQL

        Funciones POO
            Permiten cambiar la conectividad a diversos gestores de base de datos

*/




    class ConexionBdEscuela{
        private $conexion;
        private $host = "localhost:3306"
        private $usuario = "andy"
        private $password = "pass123"
        private $bd = "BD_escuela_web_2024"


        public function __construct(){
            $this->conexion = mysqli_connect($this->host, $this->usuario, $this->password,$this->bd);

            if(!$this->conexion)
            die("Error en la conexion a la BD". mysqli_connect_error());
        }

        public function getConexion(){
            return $this->conexion;
        }
    }


?>