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
        <form action="./login.php" method="POST">
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
    isset($_POST["usuario"]) && !empty($_POST["usuario"]) &&
    isset($_POST["password"]) && !empty($_POST["password"])
) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["password"];
    $archivo = file_get_contents("./contrasenas.txt");
    $validacion = strpos($archivo, $contrasena);

    if ($validacion !== FALSE && $usuario === "admin") {
        header("Location:./admin.php");
    } elseif ($validacion === FALSE && $usuario !== "admin") {
        echo "<script>alert('Usuario & Contrasena Incorrecto: Por favor introduzca datos Validos')</script>";
    } elseif ($usuario !== "admin" && $validacion !== FALSE) {
        echo "<script>alert('Usuario & Contrasena Incorrecto: Por favor introduzca datos Validos')</script>";
        //header("Location:./login.php");
    } elseif ($validacion === FALSE && $usuario === "admin") {
        echo "<script>alert('Usuario & Contrasena Incorrecto: Por favor introduzca datos Validos')</script>";
        //header("Location:./login.php");
    } else {
        header("Location:./login.php");
    }
}

$pass = file("./contrasenas.txt");
// for ($i = 0; $i < count($pass); $i++) {
//     $passActual = $pass[$i];
    
// }
$passActual = $pass[0];


if (isset($_POST["contrasenaVieja"]) == $passActual){
    if ($_POST["newContrasena"] == $_POST["confirmarContrasena"]){
        $contrasenaAsignar = $_POST["confirmarContrasena"];
        file_put_contents("contrasenas.txt", $contrasenaAsignar);
    }else{
        echo "<script>alert('Las contrasenas no coinciden')</script>";
    }
}
?>