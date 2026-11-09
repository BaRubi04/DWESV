<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrado</title>
</head>
<body>
    <h1>Página de borrado</h1>
    <?php echo '<a href="../../procesos/asignatura/p_borrar.php?id='.$_GET["id"].'&borrar=si"><h3>BORRAR</h3></a>'; 
    echo '<a href="../../procesos/asignatura/p_asignatura_listado.php"><h3>NO BORRAR</h3></a><br>';?>
</body>
</html>