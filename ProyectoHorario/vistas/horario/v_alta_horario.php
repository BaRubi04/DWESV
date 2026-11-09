<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Alta horario</title>
</head>
<body>
    <nav>
        <a>Asignaturas</a>
        <a>Usuarios</a>
        <a>Horario</a>
    </nav>
    <h1>Alta horario</h1>    
    <?php echo '<form action="resolucion_alta_horario.php?iteradorDias='.$_GET["iteradorDias"].'&curso='.$_GET["curso"].'" method="POST">'; ?>
            <!-- Curso -->
        <h2><?php echo $fila['nombre']; ?></h2>
        <?php echo '<input name="curso" value="'.$_GET["curso"].'" hidden>'; ?>
            <!-- Dias -->
        <h3><?php echo $objHorario->arrayDias[$_GET["iteradorDias"]]; ?></h3>
        <?php echo '<input name="iteradorDias" value="'.$_GET["iteradorDias"].'" hidden>'; ?>
        
        <p id="textoEmpujado">(Asignatura)</p>
        <label>Hora 1:</label>
        <select name="asignaturaHora1">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 2:</label>
        <select name="asignaturaHora2">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 3:</label>
        <select name="asignaturaHora3">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 4:</label>
        <select name="asignaturaHora4">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 5:</label>
        <select name="asignaturaHora5">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 6:</label>
        <select name="asignaturaHora6">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <label>Hora 7:</label>
        <select name="asignaturaHora7">
            <?php $objHorario->listadoAsignaturas($_GET["curso"]); ?>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html>