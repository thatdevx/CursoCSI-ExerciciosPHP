<?php

 $numero = $_POST['numero'];
 

 if($numero<1){ 
    echo "O número lido ($numero) inviabiliza a execução do programa";
}else{

$numeroInicial = 1;

do {

 $triplo = 3 * $numeroInicial;
 $numeroInicial++;
 echo "$triplo , ";

} while ($numero>=$numeroInicial);

}
