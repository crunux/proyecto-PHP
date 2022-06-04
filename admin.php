<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="./index.php">Joan Cruz - 100456854</a></div>
            <ul class="menu">
                <il><a href="./index.php">HOME</a></il>
                <il><a href="./blog.php">BLOG</a></il>
            </ul>
        </div>
    </nav>

    <section class="container">
        <h1 class="admin">Administrador de Paginas</h1>
        <h2 class="editEncabezado">Editar Biografia</h2>
        <form action="config.php" method="get">
            <div class="textbox">
                <textarea class="form-control" name="EditarBiografia" id="EditarBiografia" cols="30" rows="15"><?php
                                                                                                                echo file_get_contents("biografia.txt"); ?></textarea>
                <label><input type="submit" value="Guardar" id="submit"></label>
            </div>
        </form>
    </section>
    <section class="blogBox">
        <h2 class="EncabezadoBlog">Registro de Blog</h2>
        <form action="./config.php" method="GET">
            <div class="field">
                <label for="txtNombre" class="form-label">Titulo: <input class="form-control" required type="text" name="titulo" id="txtTitulo"></label>
            </div>
            <div class="field">
                <label for="" class="form-label">Categoria:<input class="form-control" required type="text" name="categoria" id=""></label>
            </div>
            <div class="textbox2">
                <label for="" class="form-label">Descripcion <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="8"></textarea></label>
                <label><input type="submit" value="Guardar" id="submit"></label>
            </div>
        </form>
    </section>
    <footer>
        <?php
        echo "<p>Copyright &copy; 2021-2022</p>";
        include("./detectNavegador.php")
        ?>
    </footer>
</body>

</html>