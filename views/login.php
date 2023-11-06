<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/login_style.css" rel="stylesheet">
    <title>Login</title>
</head>
    <body>
        <div id="section-login">
            <form action="" method="post">
                <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>
                <h2>Login</h2>

                <div class="input-wrapper">
                    <input class="input" type="text" name="username" placeholder=" " data-placeholder="username" required>
                    <span class="placeholder">User name</span>
                </div> 
                <div class="input-wrapper">
                    <input class="input" type="password" name="password" placeholder=" " data-placeholder="password" id='password' required>
                    <span class="placeholder">Password</span>
                </div>  
                <div class="pass-bnt">
                    <input type="checkbox" name="check_mostrar" id="checkbox" onclick='mostrarContrasena(this)'>See Password
                </div>
                <div class="buttons">
                    <input type="submit" class="btn btn-primary pull-right" name="Log-in" value="Log-in" id='button'>
                </div>  
                    
            </form>
            <form class='register' action="" method="post">
                <p>new to our website?</p><button type="submit" name='sign-up' value='sign-up'> sign-up </button>
            </form>
        </div>

    </body>

<script src="resources/js/main.js"></script>
</html>