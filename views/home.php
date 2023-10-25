<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/main.css" rel="stylesheet">
    <title>HOME</title>
</head>
    <body>
        <div id="menu">
            <ul>
                <li><h4>Home</h4></li>
                <li class="sing-off">
                    <a href="includes/logOut.php">Sing OFF</a>
                </li>
            </ul>
        </div>

        <section>
            <h2>welcome <?php echo $user->getName(); ?></h2>
            
        </section>
    </body>
</html>