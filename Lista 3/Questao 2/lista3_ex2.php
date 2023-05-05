<?php

 $numero = $_POST['numero'];
 

 if($numero<=2){
     echo "O número lido ($numero) inviabiliza a execução do programa";
 }else{
     $ehPar=2;
     while($ehPar<$numero){ 
         if($ehPar%2 == 0){
             echo "$ehPar<br>";
         }
         $ehPar++;
     }
 }

 echo "$numero";