<?php
 
$numero = $_POST['numero'];
$soma = 0; 

if($numero <= 1){ 

    echo "Operação Inválida. Numero precisa ser maior que 1"; 

}else { 

        for($i=1; $i <= $numero; $i++){ 
            if($i%2==0 && $i%5==0){ 

                echo  " $i <br>";   

                $soma = $soma + $i; 
            } 
        } 
    }echo"A soma dos números são: $soma";