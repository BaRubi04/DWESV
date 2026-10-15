<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilohorario.css" rel="stylesheet"/>
    <title>Factorial Recursivo</title>
</head>
<body>
    <form action="factorialForEach.php" method="GET">
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
                $factorial[0] = 1;
                $max;
                while($iterador <= $_GET['maximoFactorial']){
                    $factorial[$iterador-1] = facto($iterador);
                    $iterador++;
                }
                foreach($factorial as $indice => $valor){
                    echo '
                        <tr>
                            <th>'.$indice.'</th>
                            <td>'.$valor.'</td>
                        </tr>
                    ';
                }
            echo '</table>';      
        }
    ?>
</body>
</html>