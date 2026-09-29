<?php

   $n1 = (int)$_GET['n1'];
    $n2 = (int) $_GET['n2'];

    // Realiza a soma
    $soma = (int) $n1 + (int) $n2;

    // Mostra o resultado usando print
    print "<p>A soma é: " . $soma . "</p>";

    // Verifica os tipos com var_dump
    print "<h4>Verificação de tipos:</h4>";
    var_dump($n1);
    var_dump($n2);
    var_dump($soma);

?>