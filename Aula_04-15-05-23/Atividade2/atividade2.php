<?php


$numero = $_POST["numero"];

if($numero <= 1){ 
    echo "Operação Inválida. Numero precisa ser maior que 1."; 

}else { 

    for($i=1; $i <= $numero; $i++){ 

        if($i%5==0 && $i%7==0){ 

            echo  "O número $i deu Match<br>"; 

        }elseif($i%5 == 0){ 

                echo $i ." " . "é múltiplo de CINCO <br>"; 

        }elseif($i%7 == 0){ 

                echo $i ." " .  "é múltiplo de SETE <br>";     

        } 

    } 

} 

