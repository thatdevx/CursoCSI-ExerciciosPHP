<?php
    /* ENUNCIADO

    Neste exemplo, o código utiliza um único laço for para gerar os números pares e ímpares, respectivamente. 

    O código verifica se o número atual é par ou ímpar utilizando a estrutura condicional if. 
    Se o número for par, ele é impresso na coluna "Pares" da tabela. Se for ímpar, ele é impresso na coluna "Ímpares" da tabela. 
    Se o número não atender aos critérios, a célula correspondente da tabela é deixada em branco.
    
 | CÓDIGO BASE |

    echo "<table>";
    echo "<tr><th>Pares</th><th>Ímpares</th></tr>";

    for ($i=2,$j=1; $i<=10,$j<=10;$i+=2,$j+=2) {
        //Testando os pares
        echo "<tr>";
        if ($i%2==0) {
            echo "<td>" . $i . "</td>";
            
        }else {
            echo "<td>  </td>";
        }
        
        //Testando os ímpares
        if ($j%2!=0) {
            echo "<td>" . $j . "</td>";
            
        } else {
            echo "<td> </td>";
        }
        echo "</tr>";
    }
    echo "</table>";

*/




/* --- CORRIGINDO O CÓDIGO --- */

$numero = $_POST["numero"];


if($numero < 0){
    echo "Numero precisa ser positivo";

    }else {

    echo "<table>";
    echo "<tr> <th>Pares</th> <th>Ímpares</th> </tr>";

    for ($i=0; $i<=$numero; $i++) {

        if($i%2==0) {
            echo "<td>" . $i . "</td>";
        }else {
            echo "<td>  </td>";
            echo "<td>" . $i . "</td>";
        } echo "</tr>";
    }
} echo "</table>";





/* CÓDIGO ALTERNATIVO 

echo "<table>";
echo "<tr><th>Ímpares</th><th>Pares</th></tr>";

$fim = $_POST["fim"];
for ($inicio=$_POST["inicio"]; $inicio <= $fim && $inicio > 0; $inicio++) {
    
    echo "<tr>";
    //Testando os ímpares
    if ($inicio%2!=0) {
        echo "<td>" . "$inicio". "</td>";
        
    }else {
        echo "<td>  </td>";
        echo "<td>" . "$inicio". "</td>";
    }
    echo "</tr>";
}
echo "</table>";

*/