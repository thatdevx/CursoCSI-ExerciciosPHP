<?php
 
    $numero = $_POST['numero'];

    
    if($numero <= 1){

        echo "Operação Inválida. Numero precisa ser maior que 1.";
        
        }else {
        
        for($i = 1; $numero >= $i; $i++){
        
        if($i%5 === 0 && $i%3 === 0){
        
        echo "Sou Inaciano <br>";
        
        }elseif($i%5 === 0){
        
        echo "Inaciano <br>";
        
        }elseif ($i%3 === 0){
        
        echo "Sou <br>";
        
        }else{
        
        echo "$i <br>";
        
        }
        
        }
        
        }