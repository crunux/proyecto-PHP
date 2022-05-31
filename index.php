<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biografia Joan Cruz</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Joan Cruz - 100456854</a></div>
            <ul class="menu">
                <il><a href="#">Blog</a></il>
                <il><a href="#">Admin</a></il>
            </ul>
        </div>
    </nav>
    <!--Seccion Biografia-->
    <div class="biografia">
        <div class="avatar">
            <img src="img/avatar.jpg" alt="avatar" class="img">
        </div>
        <h2 class="encabezadoB">Biografia</h2>
        <h3 class="bio">
            <?php
            echo file_get_contents("biografia.txt");
            ?>
        </h3>
    </div>
    <!--Seccion Blog-->
    <div class="secblog">
        <h2>Blog mas recientes.</h2>
        <div class= "center">
            <?php
            $blog = file("blog.txt");
            $blog = array_reverse($blog);


            $contenidoDePagina = 3;
            $limite = $contenidoDePagina;

            $pagina = 1;

            if (isset($_GET["anterior"])) {
                $pagina = $_GET["anterior"] ? $_GET["anterior"] : 1;
            }

            if (isset($_GET["siguiente"])) {
                $pagina = $_GET["siguiente"];
            }

            $offset = ($pagina - 1) * $contenidoDePagina;
            $conteo = count($blog);
            $paginas = ceil($conteo / $contenidoDePagina);
            $aux = 0;

            for ($i = $offset; $aux < $contenidoDePagina; $i++) {

                if (!isset($blog[$i])) {
                    break;
                }

                ///echo "<div class='row row-cols-1 row-cols-md-2 g-4'>";
                $filaActual = explode("|", $blog[$i]);

                $mostrarBlog = <<< BLOG
                <div class='col card text-bg-dark mb-3' style= 'max-width: 18rem';>
                    <div class='card-body'>
                        <h2 class='card-title'>$filaActual[1]</h2>
                        <h6 class='card-subtitle mb-2 text-muted'>$filaActual[2]</h6>
                        <h6 class='card-subtitle mb-2 text-muted'>$filaActual[3]</h6>
                        <p class='card-text'>$filaActual[4]</p>
                    </div>
                </div>

                BLOG;
                echo $mostrarBlog;
                $contador = 0;
                $aux++;
            }
            echo "<form method='GET'>";
            echo "<div class='botonSigAnt'>";
            echo "<button class='botonBlog' type='submit' name='anterior' value='" . ($pagina - 1 ? $pagina - 1 : 1) . "'>Anterior</button>";
            echo "<button class='botonBlog' type='submit' name='siguiente' value='" . ($pagina + 1 <= $paginas ? $pagina + 1 : $pagina) . "'>Siguiente</button>";
            echo "</div>";
            echo "</form>";

            ?>
        </div>
    </div>
</body>

</html>