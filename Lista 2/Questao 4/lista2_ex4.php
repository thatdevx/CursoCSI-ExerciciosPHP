<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$soma = $n1 + $n2;

if(($soma%2)==0){ 
	echo "A soma de $n1 e $n2 é $soma. Este número é PAR!";
}else{
	echo "A soma de $n1 e $n2 é $soma. Este número é IMPAR ";
}
