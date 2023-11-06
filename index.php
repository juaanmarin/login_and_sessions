<!-- prueba de la conexion a la bd --> <?php //include_once "includes/connectionDb.php"; //$db = new DB(); $db->connect(); ?>
<?php 

    include_once 'includes/user.php';
    include_once 'includes/userSession.php';

    $userSession = new Usersession();
    $user = new User();

    if (isset($_SESSION['user'])) {
        // echo 'Hay sesion';
        $user->setUser($userSession->getCurrentUser());
        include_once 'views/home.php';

    }else if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['Log-in'])){
        //echo "Validacion de login";
        $userForm = $_POST['username'];
        $passForm = $_POST['password'];

        if($user->userExists($userForm, $passForm)){
            // echo 'usuario validado';
            $userSession->setCurrentUser($userForm);
            $user->setUser($userForm);
           
            include_once 'views/home.php';
        }else{
            //echo 'Nombre de usuario o pasword incorrecto';
            $errorLogin = 'Incorrect username or password';
            include_once 'views/login.php';
        }

    }else if (isset($_POST['sign-up'])) {
        if(isset($_POST['e-mail']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])){
            $name = $_POST['name'];
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['e-mail'];

            $register = $user->registerUser($name, $userName, $password, $email);
        }

        include_once 'views/signup.php';

    }else{
        // echo 'login';
        include_once 'views/login.php';
        //include_once 'views/singup.php';
    }
    


?>
