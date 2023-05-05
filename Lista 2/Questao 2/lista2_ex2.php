<?php

$mes = $_POST['mes'];

if($mes>=1 && $mes<=3){
    echo "O número $mes é um mês do 1º trimestre";
}elseif($mes>=4 && $mes<=6){
    echo "O número $mes é um mês do 2º trimestre";
}elseif($mes>=7 && $mes<=9){
    echo "O número $mes é um mês do 3º trimestre";
}elseif($mes>=10 && $mes<=12){
    echo "O número $mes é um mês do 4º trimestre";
}else {
    echo "Não existe mês com este número: $mes";
}