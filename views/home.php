<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/home_styles.css" rel="stylesheet">
    <title>HOME</title>
</head>
<body>
    <div id="menu">
        <ul>
            <!-- <li> -->
            <h1>Home</h1>
            <!-- </li> -->
            <!-- <li class="sing-off">
                <a href="includes/logOut.php">Sing OFF</a>
            </li> -->
        </ul>
    </div>

    <section>
        <!-- <h2>welcome </h2> -->
        <div class="blog-card spring-fever">
            <div class="title-content">
                <h3>WELOCOME</h3>
                <hr />
                <div class="intro">Welcome <?php echo $user->getName();?> this is your card.</div>
            </div><!-- /.title-content -->
            <div class="card-info">
                This is a practice of a complete login, to leave the main page and return to the beginning of the section click the link.
                <br>
                <a href="includes/logOut.php" class='sign_off'>Sing OFF</a>
            </div><!-- /.card-info -->
            <div class="utility-info">
                <ul class="utility-list">
                    <li class="comments">12</li>
                    <li class="date"><?php echo date("d.m.y");?></li>
                </ul>
            </div><!-- /.utility-info -->
            <!-- overlays -->
            <div class="gradient-overlay"></div>
            <div class="color-overlay"></div>
        </div><!-- /.blog-card -->

    </section>
</body>

</html>