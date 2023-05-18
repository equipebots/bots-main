<?php

include("../../../Model/connection/conn.php");
require_once("../../../Model/connection/config.php");

$nome = $_POST ["nome-usuario"];
$email = $_POST ["email"];
$senha = $_POST ["senha"];

$conn->query("DELETE FROM usuarios WHERE nome = '$nome' AND email = '$email' AND senha = '$senha'");

?>