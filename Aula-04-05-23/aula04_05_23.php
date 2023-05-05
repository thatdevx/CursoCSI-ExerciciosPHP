<?php

$salarioMinimo = $_POST['salarioMinimo'];
$horas = $_POST['horas'];
$dependentes = $_POST['dependentes'];

if($salarioMinimo and $horas and $dependentes <= 0){

    echo "Valor invalido. Informe todos os valores corretamente.";

    }else {

        $valorHora=$salarioMinimo/5;
        $bruto=$horas*$valorHora;
        $imposto=$bruto*0.059;
        $ValorPorDependentes=($bruto/12)*$dependentes;
        $salariofinal=$bruto- $imposto+$ValorPorDependentes;

        $salario=number_format($salariofinal, 2, ',', '.');

        echo "
                O valor de sua hora é de R$ $valorHora. <br>
                Seu imposto equivale à $imposto <br>
                E o valor que você tem a receber por dependentes é de R$ $ValorPorDependentes <br>
                O salario total á receber é R$ $salariofinal";

    }
