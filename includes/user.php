<?php

    include_once 'includes/connectionDb.php';

    //se extiende de la clase BD donde esta la conexion a la bd
    class User extends DB{
        
        private $name;
        private $username;

        public function userExists($user, $pass) {
            $md5pass = md5($pass);

            $query = $this->connect()->prepare('SELECT * FROM users where username= :user AND password= :pass');
            $query->execute(['user' => $user, 'pass' => $md5pass]);

            if ($query->rowCount()) {
                return true;
            }else{
                return false;
            }
        }

        public function setUser($user) {
            $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user');
            $query->execute(['user'=>$user]);     

            foreach ($query as $currentUser) {
                $this->name = $currentUser['name'];
                $this->username = $currentUser['username'];
            }
        }

        public function getName(){
            return $this->name;
        }

        public function registerUser($name, $userName, $password, $email){
            //$userExist = $this->userExists();
            $md5pass = md5($password);
            $query = $this->connect()->prepare('INSERT INTO users (name, username, password, email) values (:name, :username, :password, :email)');
            $success = $query->execute(['name'=>$name, 'username'=>$userName, 'password'=>$md5pass, 'email'=>$email ]);
            if ($success) {
                return "Datos insertados correctamente";
            } else {
                return "Error al insertar datos: " . $query->errorInfo()[2];
            }
        }

    }
    

?> 