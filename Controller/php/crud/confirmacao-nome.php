<?php

include("../../../Model/connection/conn.php");
require_once("../../../Model/connection/config.php");

$email = $_POST ["email"];
$nome_novo = $_POST ["nome-novo"];
$senha = $_POST ["senha"];


$conn->query("UPDATE usuarios SET nome = '$nome_novo' WHERE email = '$email' AND senha = '$senha'");



?>
