<?php

   $vitorias = $_POST['vitorias'];
   $empates = $_POST['empates'];
   $derrotas = $_POST['derrotas'];
   
   $totalJogos = $vitorias + $empates + $derrotas;
   $pontosDisputado = $totalJogos*3;
   $pontosTotal = ($vitorias * 3) + $empates;
   $pontosPerdidos = $pontosDisputado - $pontosTotal;

   echo "Total de jogos: $totalJogos <br>
         Total de pontos disputados: $pontosDisputado<br>
         Total de pontos ganhos: $pontosTotal<br>
         Total de pontos perdidos: $pontosPerdidos";
