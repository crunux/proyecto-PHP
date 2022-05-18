<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biografia Joan Cruz</title>
</head>

<body>
    <!--NavBar-->
    <nav id="name">
        <div class="logo">Joan Miguel Cruz - 100456854</div>
        <ul class="menu">
            <li><a href="#">Admin</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </nav>
    <!--Seccion Biografia-->
    <section class="biografia">
        <div class="avatar">
            <img src="img/avatar.jpg" alt="avatar" class="img">
        </div>
        <h2 class="encabezadoB">Biografia</h2>
        <h3 class="bio">
            <?php
            include("config.php");
            echo $biografic
            ?>
        </h3>
    </section>
    <!--Seccion Blog-->
    <section class="secblog">
        <h2>Blog mas recientes.</h2>
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>