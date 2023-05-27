<?php
    /*
    Este código cria uma tabela HTML com uma tabela de multiplicação de 1 a 10. 
    O for externo é responsável por criar as linhas da tabela, 
    enquanto o for interno é responsável por criar as células de cada linha, 
    contendo o resultado da multiplicação dos números da linha e da coluna correspondente.
    */

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    
    if($numero1 <= 0 || $numero2 <= 0){
        echo "Operação Inválida. Numero precisa ser maior que zero e todos os campos precisam ser preenchidos";
    
    }else{

    echo "<table border='1'>";
    for ($i = 1; $i <= $numero1; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $numero2; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }

    ?>
