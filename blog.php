<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Blog - Joan Cruz</title>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="./index.php">Joan Cruz - 100456854</a></div>
            <ul class="menu">
                <il><a href="./index.php">HOME</a></il>
                <il><a href="./login.php">ADMIN</a></il>
            </ul>
        </div>
    </nav>
    <section class="container2">
        <h3 class="titleblogs">
            Blogs
        </h3>
        <section class="centerblogs">
            <?php
            $blog = file("blog.txt");
            $blog = array_reverse($blog);


            $contenidoDePagina = 5;
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
                <div class='cardContent';>
                        <div class='card-title'>
                        <h2>$filaActual[1]</h2>
                        <h6 class='card-subtitle '>$filaActual[2]</h6>
                        <h6 class='card-subtitle '>$filaActual[3]</h6>
                        </div>
                        <hr>
                        <p class='card-text'>$filaActual[4]</p>
                        <hr>
                </div>
                BLOG;
            echo $mostrarBlog;
            $contador = 0;
            $aux++;
            }
            echo "<form method='GET'>";
            echo "<button class='Buttonblog' type='submit' name='anterior' value='" . ($pagina - 1 ? $pagina - 1 : 1) . "'>Anterior</button>";
            echo "<button class='Buttonblog' type='submit' name='siguiente' value='" . ($pagina + 1 <= $paginas ? $pagina + 1 : $pagina) . "'>Siguiente</button>";
            echo "</form>";

            ?>
        </section>
    </section>
    <footer>
        <?php
        echo "<p>Copyright &copy; 2021-2022</p>";
        include("./detectNavegador.php")
        ?>
    </footer>
</body>

</html>