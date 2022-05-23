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
    <nav id="name">
        <div class="logo">Joan Miguel Cruz - 100456854</div>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="admin">Administrador de Paginas</h1>

        <form action="config.php" method="get">
            <h2 class="editEncabezado">Editar Biografia</h2>
            <textarea name="EditarBiografia" id="EditarBiografia" cols="80" rows="20"><?php include("config.php"); echo file_get_contents("biografia.txt"); ?></textarea>
            <input type="submit" value="Guardar" id="submit">

        </form>
    </div>

    <form id="formCrearBlog" action="./config.php" method="GET">
        <h2>Registro de Blog</h2>
        <label for="txtNombre">Titulo: <input required type="text" name="titulo" id="txtTitulo"></label>
        <label for="">Categoria:<input required type="text" name="categoria" id=""></label>
        <label for="">Descripcion <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea></label>
        <label><input type="submit" name="botonGuardar" value="Guardar"></label>
    </form>

</body>

</html>