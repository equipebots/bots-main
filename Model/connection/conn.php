<?php
//Conexão com o banco de dados
//Localhost = nome padrão da hospedagem local
//root = nome do usuario do banco
//'' = senha do usuario do banco
session_start();
$host = 'localhost'; // nome do host
$dbname = 'login'; // nome do banco de dados
$username = 'root'; // nome de usuário
$password = ''; // senha

$conn = new mysqli($host, $username, $password, $dbname);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


?>