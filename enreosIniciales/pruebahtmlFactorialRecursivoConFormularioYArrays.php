<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilohorario.css" rel="stylesheet"/>
    <title>Factorial Recursivo</title>
</head>
<body>
    <form action="pruebahtmlFactorialRecursivoConFormularioYArrays.php" method="GET">
        <label>maximoFacto</label>
        <input name="maximoFactorial">
        <input type="submit">
    </form>
    <?php 
        function facto($iterador){
            if($iterador <= 1) return 1;
            return $iterador * facto($iterador - 1);
        }
        if(isset($_GET["maximoFactorial"])){
            echo '<table>';
                $iterador = 1;
                $iterador2;
                $factorial[0] = 1;
                $concatenacion[0] = '1';
                $max;
                while($iterador <= $_GET['maximoFactorial']){
                    for($iterador2 = $iterador, $concatenacion[$iterador-1] = $iterador; $iterador2 > 1; $iterador2--) $concatenacion[$iterador-1] = $concatenacion[$iterador-1]."x".$iterador2-1;
                    $factorial[$iterador-1] = facto($iterador);
                    $iterador++;
                }
                for($iterador = 1; $iterador <= $_GET['maximoFactorial']; $iterador++){
                    echo '
                        <tr>
                            <th>'.$iterador.'</th>
                            <td>'.$factorial[$iterador-1].'</td>
                            <td>'.$concatenacion[$iterador-1].'</td>
                        </tr>
                    ';
                }
            echo '</table>';      
        }
    ?>
</body>
</html>