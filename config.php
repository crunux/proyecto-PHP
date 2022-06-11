<?php

 if (isset($_POST["EditarBiografia"]))
 {
   $bio = $_POST["EditarBiografia"];
   file_put_contents("biografia.txt", $bio);
   header("Location: index.php" );
 }

if (isset($_POST["titulo"]) && !empty($_POST["titulo"]) &&
  isset($_POST["categoria"]) && !empty($_POST["categoria"]) &&
  isset($_POST["descripcion"]) && !empty($_POST["descripcion"])
) {
  $blog = file("blog.txt");
  $ultimoblog = $blog[count($blog) - 1];
  $ultimoId = explode("|", $ultimoblog)[0]; 
  $fecha = date("d/m/Y");

  if (!is_numeric($ultimoId)) {
    $ultimoId = 0;
  }
  $id = $ultimoId + 1;

  $nuevoRegistro = "$id|";
  $nuevoRegistro .= $_POST["titulo"] . "|";
  $nuevoRegistro .= $_POST["categoria"] . "|";
  $nuevoRegistro .= $fecha . "|";
  $nuevoRegistro .= $_POST["descripcion"] . "\n";

  //para guardar usamos file_put_contents. Pasamos la ruta como primer parametro y el contenido a guardar como segundo parametro
  //Si queremos que se agregue al final el nuevo contenido, entonces debemos pasar como tercer parametro FILE_APPEND
  file_put_contents("blog.txt", $nuevoRegistro, FILE_APPEND);

  header("Location: blog.php");
} else {
  echo "No se pudo guardar";
}

?>