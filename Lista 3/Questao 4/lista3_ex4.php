<?php

 $numero = $_POST['numero'];
 
    if($numero<=2){ 
        echo "O número lido ($numero) inviabiliza a execução do programa";
    }else{
        
        $ehPar=2;
        do{
            if($ehPar%2 == 0){
                echo "$ehPar<br>";
            }
            $ehPar++;
        }while($ehPar<$numero); 

 echo "$numero";