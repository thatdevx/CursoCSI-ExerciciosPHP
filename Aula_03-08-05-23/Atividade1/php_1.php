<?php
    /*
    Este código exibe os números de 0 a 9 usando as três estruturas de repetição diferentes. 
    O for usa um contador para iterar de 0 a 9, 
    enquanto o while e o do-while usam uma variável de controle que é incrementada em cada iteração.
    */

    $numero1 = $_POST['numFor'];
    $numero2 = $_POST['numWhile'];
    $numero3 = $_POST['numDoWhile'];

    if($numero1 <= 0 || $numero2 <= 0 || $numero3 <= 0){
        echo "Operação Inválida. Numero precisa ser maior que zero e todos os campos precisam ser preenchidos";
    
    }else{


    // Exemplo com for
    for ($i = 0; $i < $numero1; $i++) {
        echo $i . " ";
    }
    echo "<hr>";

    // Exemplo com while
    $j = 0;
    while ($j < $numero2) {
        echo $j . " ";
        $j++;
    }
    echo "<hr>";

    // Exemplo com do-while
    $k = 0;
    do {
        echo $k . " ";
        $k++;
    } while ($k < $numero3);
}