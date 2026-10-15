<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP</title>
</head>
<body>
    <?php 
        $texto = 'Queso';
        $texto2 = 'Huevas de salmón';
        $texto1 = 'Pan';
        ?>
        <h1><?phpecho $texto1;?></h1>
        <?php
            echo '<h1>'.$texto.'</h1>';
            echo "<h2>$texto2</h2>";
        ?>
</body>
</html>