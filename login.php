 <form action="./login.php" method="GET" class="login">
     <input name="usuario" type="text" placeholder="Usuario">
     <br><br>
     <input name="password" type="password" placeholder="Contraseña">
     <br><br>
     <!--Lo siguiente envía el formulario-->
     <input type="submit" value="Acceder">
 </form>

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