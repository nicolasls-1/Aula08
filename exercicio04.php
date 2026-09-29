<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
echo "Boas Vindas";
?>