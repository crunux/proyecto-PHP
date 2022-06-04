<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Login</title>
</head>

<body>
    <div class="login">
        <h2>Inicio de seccion de Administrador</h2>
        <form action="./login.php" method="GET">
            <div class="Usuario">
                <label>Usuario</label>
                <input name="usuario" type="text" placeholder="Usuario">
            </div>
            <br><br>
            <div class="contrasena">
                <label>Contrasena</label>
                <input name="password" type="password" placeholder="Contraseña">
            </div>
            <br><br>
            <!--el boton siguiente envía el formulario-->
            <input class="acceder" type="submit" value="Acceder">
        </form>
    </div>
</body>

</html>

<?php
if (
    isset($_GET["usuario"]) && !empty($_GET["usuario"]) &&
    isset($_GET["password"]) && !empty($_GET["password"])
) {
    $usuario = $_GET["usuario"];
    $contrasena = $_GET["password"];
    $archivo = file_get_contents("./contrasenas.txt");
    $validacion = strpos($archivo, $contrasena);

    if ($validacion !== FALSE && $usuario === "admin") {
        header("Location:./admin.php");
    } elseif ($validacion !== TRUE && $usuario !== "admin") {
        echo "<script>alert('Usuario & Contrasena Incorrecto: Por favor introduzca datos Validos')</script>";
    } elseif ($usuario !== "admin" && $validacion !== FALSE) {
        echo "<script>alert('Usuario Incorrecto: Por favor introduzca un usuario Valido')</script>";
        //header("Location:./login.php");
    } elseif ($validacion === FALSE && $usuario === "admin") {
        echo "<script>alert('Contrasena Incorrecta: Por favor introduzca una contrasena Valida')</script>";
        //header("Location:./login.php");
    } else {
        header("Location:./login.php");
    }
}
?>