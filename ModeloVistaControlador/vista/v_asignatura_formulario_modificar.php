<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario modificar</title>
</head>
<body>
    <h1>Modificar asignaturas</h1>
    <form action="../otros/resolucion_modificar.php" method="POST">
        <div>
            <h3>Datos Previos</h3>
            <?php
                echo '<label for="id">ID: </label>  <input type="text" name="id" placeholder="'.$_GET["id"].'" readonly>   ';
                echo '<label for="nombrePrevio">Asignatura: </label>   <input type="text" name="nombrePrevio" placeholder="'.$_GET["nombrePrevio"].'" readonly>   ';
                echo '<label for="colorPrevio">Color: </label>   <input type="text" name="colorPrevio" placeholder="'.$_GET["colorPrevio"].'" readonly>';
            ?>
            <br><br>
            <h3>Datos Nuevos</h3>
            <label for="nombre">Asignatura: </label><input type="text" name="nombre">
            <label for="color">Color: </label><input type="text" name="color">
            <br><br>
            <input type="submit">
        </div>
    </form>
</body>
</html>