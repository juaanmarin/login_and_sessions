<?php

    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct(){
            // Parámetros de conexión
            $this->host = 'localhost:3307'; //localhost
            $this->db = 'shopping';
            $this->user = 'root';
            $this->password = 'nuviavelasquez07'; //'Juan50395bg*'
            $this->charset = 'utf8mb4';
        }

        public function connect(){ 
            //intento de conexion a la bd
            try {
                $connection = "mysql:host=". $this->host . ";dbname=". $this->db . ";charset=". $this->charset;
                
                $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
                
                $pdo = new PDO($connection, $this->user, $this->password, $options);

                // echo "Conexion Exitosa";
                return $pdo;

            } catch (PDOExeption $e) {
                print_r("Error connection: ". $e->getMessage());
            }
        }

    }

?>