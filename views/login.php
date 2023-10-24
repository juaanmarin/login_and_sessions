<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/main.css" rel="stylesheet">
    <title>Login</title>
</head>
    <body>
        <section id="section-login">
            <form action="" method="post">
                <h2>Login</h2>
                <p>
                    User Name : <br>
                    <input type="text" name="username" class="field"> 
                </p>
                <p>
                    Password : <br>
                    <input type="password" name="password" id='password' class="field">
                    
                    <button class="view-pass" type="button" onclick="mostrarContrasena()">
                        <img src="resources/img/ojo.png" alt="">
                    </button>

                </p>
                <p>
                    <input type="submit" value="Log-in" id='button'>
                </p>
                
            </form>
        </section>

    </body>

<script src="resources/js/main.js"></script>
</html>