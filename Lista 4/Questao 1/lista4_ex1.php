<?php

 $numero = $_POST['numero'];
 
 $repetir = "Eu estou aprendendo o loop FOR";
 
 if($numero <= 0){
 
  echo "Numero inválido. O numero precisa ser maior que 0.";
  
  }else{
 
 for($i = 1; $i <= $numero; $i++){

 echo "$repetir <br>";
}
}
