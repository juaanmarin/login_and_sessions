<?php

    include_once 'userSession.php';

    $userSession = new Usersession();

    $userSession->closeSession();

    header("location: ../index.php");

?>