<?php
    /*
    Neste exemplo, o código utiliza um laço while para encontrar os primeiros 10 números primos. 
    O laço continua executando enquanto o número de primos encontrados ($count) for menor que 10.

    Em cada iteração do laço, o código verifica se o número atual ($num) é um número primo, 
    verificando se ele é divisível por algum número inteiro de 2 ($i=2) até o antecessor imediato do próprio número ($i<$num). 
    Se o número for divisível, ele não é um número primo e a variável $isPrime é definida como false.

    Se o número for um número primo, o código exibe uma mensagem na tela indicando que o número é primo e incrementa a variável $count. 
    O código então passa para o próximo número e o processo se repete até que o número desejado de primos tenha sido encontrado.
    */


    $num = 2;
    $count = 0;
    $limite = $_POST["numero"];
    
    while ($count < $limite) {
        $isPrime = true;
        for ($i=2; $i<$num; $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $num . " é um número primo.<br>";
            $count++;
        }
        $num++;
    }
