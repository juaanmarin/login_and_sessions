<!-- prueba de la conexion a la bd --> <?php //include_once "includes/connectionDb.php"; //$db = new DB(); $db->connect(); ?>
<?php 

    include_once 'includes/user.php';
    include_once 'includes/userSession.php';

    $userSession = new Usersession();
    $user = new User();

    if (isset($_SESSION['user'])) {
        echo 'Hay sesion';
    }else if(isset($_POST['username']) && isset($_POST['password'])){
        echo "Validacion de login";
    }else{
        echo 'login';
    }
    


?>
