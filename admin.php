<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Joan Cruz - 100456854</a></div>
            <ul class="menu">
                <il><a href="#">Home</a></il>
                <il><a href="#">Blog</a></il>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="admin">Administrador de Paginas</h1>
        <form action="config.php" method="get">
            <h2 class="editEncabezado">Editar Biografia</h2>
            <textarea name="EditarBiografia" id="EditarBiografia" cols="65" rows="20"><?php
                                                                                        echo file_get_contents("biografia.txt"); ?></textarea>
            <input type="submit" value="Guardar" id="submit">
        </form>
    </div>
    <div class="blogBox">
        <h2 class="EncabezadoBlog">Registro de Blog</h2>
        <form id="formCrearBlog" action="./config.php" method="GET">
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Titulo: <input class="form-control" required type="text" name="titulo" id="txtTitulo"></label>
                <label for="" class="form-label">Categoria:<input class="form-control" required type="text" name="categoria" id=""></label>
                <label for="" class="form-label">Descripcion <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="8"></textarea></label>
                <label><input type="submit" name="botonGuardar" value="Guardar" id="submit"></label>
            </div>
        </form>
    </div>
</body>

</html>