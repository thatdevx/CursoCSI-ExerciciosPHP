<?php

    $alunosM = $_POST['m'];
    $alunosF = $_POST['f'];
    $alunosAprov = $_POST['aprovados'];

    $alunosTotal = $alunosM + $alunosF;
    $mas = ($alunosM / $alunosTotal)*100;
    $fem = ($alunosF / $alunosTotal)*100;
    $aprov = ($alunosAprov / $alunosTotal)*100;

    echo "O percentual de aluno do sexo masculino é $mas% <br>
          O percentual de aluno do sexo feminino é $fem% <br>
          O percentual de alunos aprovados é $aprov%";
