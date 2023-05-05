<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$media = ($n1 + $n2)/2;
$metadeDif = ($n1 - $n2)/2;

echo "A média aritmética entre os números $n1 e $n2 é $media <br>
E a metade da diferença de $n1 por $n2 é $metadeDif";