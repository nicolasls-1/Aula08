<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];


if ($cidade == 'Curitiba') {
    echo '<p> Bem Vindo Curitibano .</p>';
} else {

    echo '<h4>Debug com var_dump :</h4>';
    var_dump($_POST);
}
?>