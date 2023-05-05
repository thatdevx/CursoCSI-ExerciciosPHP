<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

if($sexo=="feminino" and $idade<25){ 
	echo "$nome, VOCÊ FOI ACEITA.";
}else {
	echo "$nome, tente novamente na próxima.";
}