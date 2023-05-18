<?php
    include("../../../Model/connection/conn.php");
    require_once("../../../Model/connection/config.php");
    // Verifica se a conexão foi bem sucedida
    if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}   
    $tipo = $_POST["tipo"];
    $ddd = $_POST["ddd"];
    $telefone = $_POST["telefone"];
    
    
    if (isset($_POST['email']) || isset($_POST['senha'])) {   
    $conn->query ("INSERT INTO telefones (tipo, ddd, telefone) VALUES ('$tipo','$ddd','$telefone')");

    }
// Fecha a conexão com o banco de dados
mysqli_close($conn);
          


?>