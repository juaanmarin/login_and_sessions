<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/singup_style.css" rel="stylesheet">
    <title>Sing Up</title>
</head>
    <body>
        <div id="section-login">
            <form action="" method="post">
                <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>
                <h2>Sing Up</h2>

                <div class="input-wrapper">
                    <input class="input" type="text" name="username" placeholder=" " data-placeholder="username" required>
                    <span class="placeholder">E-mail</span>
                </div> 
                <div class="input-wrapper">
                    <input class="input" type="text" name="username" placeholder=" " data-placeholder="username" required>
                    <span class="placeholder">Name</span>
                </div> 
                <div class="input-wrapper">
                    <input class="input" type="text" name="username" placeholder=" " data-placeholder="username" required>
                    <span class="placeholder">User name</span>
                </div> 
                <div class="input-wrapper">
                    <input class="input" type="password" name="password" placeholder=" " data-placeholder="password" id='password' required>
                    <span class="placeholder">Password</span>
                </div>  
                <div class="pass-btn">
                    <input type="checkbox" name="check_mostrar" id="checkbox" onclick='mostrarContrasena(this)'>See Password
                </div>
                <div class="buttons">
                    <input type="submit" class="btn btn-primary pull-right" value="Sing-up" id='button'>
                </div>  
                
            </form>
        </div>

    </body>

<script src="resources/js/main.js"></script>
</html>