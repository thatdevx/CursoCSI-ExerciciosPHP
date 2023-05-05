<?php

 $kmInicial = $_POST['inicio'];
 $kmFinal = $_POST['final'];
 $combustivel =$_POST['combustivel'];

 
 $kmPorL = ($kmFinal - $kmInicial)/ $combustivel;

 echo "Seu carro tem o consumo de $kmPorL km/l";