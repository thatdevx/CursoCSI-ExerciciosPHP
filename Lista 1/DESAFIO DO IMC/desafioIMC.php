<?php
    /*
    Calcular e analisar o IMC calculado de acordo com a
    classificação definida pela OMS: Baixo peso, Peso adequado, 
    Sobrepeso ou Obeso.
    IMC: peso/(altura*altura)
    */

    //Entrada de Dados
    $peso=$_POST["peso"];//valores virão do formulário
    $altura=$_POST["altura"];
    
    //Processamento
    $imc=$peso/($altura*$altura);
    
    /*analisar o IMC calculado
    baixo peso: imc<18.5 ---> OK
    peso adequado:  18.5<=imc<25 
    sobrepeso: 25<=imc<30
    obeso: imc>=30
    */
    if($imc<18.5){//ENTRA AQUI TODO VALOR MENOR DO QUE 18.5
        echo "Seu IMC é $imc e você está com BAIXO PESO.";
    }elseif($imc>=18.5 && $imc<25){//NÃO PODE ESCREVER ASSIM: 18.5<= $imc <25
        echo "Seu IMC é $imc e você está com PESO adequado.";
    }elseif($imc>=25 && $imc<30){ //TESTANDO UM INTERVALO DE VALORES
        echo "Seu IMC é $imc e você está com SOBREPESO.";
    }else{//SÓ ENTRA NO ELSE SE FOR MAIOR OU IGUAL A 30
        echo "Seu IMC é $imc e você está OBESO.";
    }
