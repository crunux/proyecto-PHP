<?php

 if (isset($_GET["EditarBiografia"]))
 {
   $bio = $_GET["EditarBiografia"];
   file_put_contents("biografia.txt", $bio);
   header("Location: admin.php" );
    
 }

if (isset($_GET["titulo"]) && !empty($_GET["titulo"]) &&
  isset($_GET["categoria"]) && !empty($_GET["categoria"]) &&
  isset($_GET["descripcion"]) && !empty($_GET["descripcion"])
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
  $nuevoRegistro .= $_GET["titulo"] . "|";
  $nuevoRegistro .= $_GET["categoria"] . "|";
  $nuevoRegistro .= $fecha . "|";
  $nuevoRegistro .= $_GET["descripcion"] . "\n";

  //para guardar usamos file_put_contents. Pasamos la ruta como primer parametro y el contenido a guardar como segundo parametro
  //Si queremos que se agregue al final el nuevo contenido, entonces debemos pasar como tercer parametro FILE_APPEND
  file_put_contents("blog.txt", $nuevoRegistro, FILE_APPEND);

  header("Location: blog.php");
} else {
  echo "No se pudo guardar";
}

?>