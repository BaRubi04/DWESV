<?php
    require '../controlador/c_asignatura.php';
    $objAsignatura = new Asignatura();
    $fila = $objAsignatura->consultaNombreColor($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario modificar</title>
</head>
<body>
    <h1>Modificar asignaturas</h1>
    <form action="../otros/modificar.php" method="POST">
        <div>
            <?php
                echo '<input type="text" name="idAsignatura" value="'.$_GET["id"].'" hidden>';
                echo '<label for="nombre">Asignatura: </label>   <input type="text" name="nombre" value="'.$fila["nombre"].'">   ';
                echo '<label for="color">Color: </label>   <input type="text" name="color" value="'.$fila["color"].'">';
            ?>
            <br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>