<?php

$salarioBruto = $_POST['salario'];

$desconto = $salarioBruto * 0.08;
$salarioLiquido = $salarioBruto - $desconto;
$formatSb = number_format($salarioBruto,2,",",".");
$formatSl = number_format($salarioLiquido,2,",",".");

echo "O salário bruto é de R$ $formatSb com o desconto de 8%, o líquido fica em R$$formatSl";
