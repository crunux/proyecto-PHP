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
    <nav id="name">
        <div class="logo">Joan Miguel Cruz - 100456854</div>
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="">Admin</a></li>
        </ul>
    </nav>
    <?php
    //file permite obtener el contenido de un archivo como un arreglo. Cada linea del archivo, representa un elemento del arreglo.
    $blog = file("blog.txt");
    echo "<table border='1'>";
    for ($i = 0; $i < count($blog); $i++) {
        echo "<tr>";
        $filaActual = explode("|", $blog[$i]);
        $id = $filaActual[0];
        for ($j = 0; $j < count($filaActual); $j++) {
            echo $i == 0 ? "<th>" . $filaActual[$j] . "</th>" : "<td>" . $filaActual[$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>