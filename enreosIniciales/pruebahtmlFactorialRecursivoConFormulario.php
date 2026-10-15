<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilohorario.css" rel="stylesheet"/>
    <title>Factorial Recursivo</title>
</head>
<body>
    <form action="pruebahtmlFactorialRecursivoConFormulario.php" method="GET">
        <label>maximoFacto</label>
        <input name="maximoFactorial">
        <input type="submit">
    </form>
    <?php 
        if(isset($_GET["maximoFactorial"])){
            echo '
            <table>
                $iterador = 1;
                $iterador2;
                $factorial = 1;
                $concatenacion = '';
                $max;
                while($iterador <= $_GET['maximoFactorial']){
                    echo '
                        <tr>
                            <th>$iterador</th>
                            <td>$factorial</td>
                            <td>$concatenacion</td>
                        </tr>
                    ';
                    $iterador++;
                    for($iterador2 = $iterador, $concatenacion = $iterador; $iterador2 > 1; $iterador2--) $concatenacion = $concatenacion."x".$iterador2-1;
                    $factorial = facto($iterador);
                }
                function facto($iterador){
                    if($iterador <= 1) return 1;
                    return $iterador * facto($iterador - 1);
                }
            </table>
            '
        } 
    ?>
</body>
</html>