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
            echo file_get_contents("biografia.txt");
            ?>
        </h3>
    </section>
    <!--Seccion Blog-->
    <section class="secblog">
        <h2>Blog mas recientes.</h2>
        <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
        <?php
                //file permite obtener el contenido de un archivo como un arreglo. Cada linea del archivo, representa un elemento del arreglo.
                echo "<div class='row row-cols-1 row-cols-md-2 g-4'"; 
                $blog = file("blog.txt");
                    for ($i = 0; $i < count($blog); $i++) {
                        $filaActual = explode("|", $blog[$i]);
                        $id = $filaActual[0];
                        echo "<div class='col'>.<div class='card text-bg-dark mb-3' style='max-width: 18rem;'>" . "<div class='card-body'>";
                        echo $i >= 0 ? "<h5 class='card-title'>" . $filaActual[1] . "</h5>" . "<h6 class='card-subtitle mb-2 text-muted'>" . $filaActual[2] . "</h6>" . "<h6 class='card-subtitle mb-2 text-muted'>" . "<p class='card-text'>" . $filaActual[3] . "</h6>" . $filaActual[4] . "</p>" : "<h6>" . "no se encontraron blogs" . "</h6>";
                        echo "</div>" . "</div>"."</div>";
                    }
                echo "</div>";
                ?>
        </div>
    </section>
</body>

</html>