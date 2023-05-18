<?php
    include("../../../Model/connection/conn.php");
    require_once("../../../Model/connection/config.php");
    // Verifica se a conexão foi bem sucedida
    if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}   
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"]; 
    $cidade = $_POST["cidade"];   
    $estado = $_POST["estado"];
    
    if (isset($_POST['email']) || isset($_POST['senha'])) {   
        $conn->query ("INSERT INTO enderecos (rua, numero, complemento, cidade, estado, cep, bairro) VALUES ('$rua','$numero','$complemento', '$cidade', '$estado', '$cep', '$bairro')");
        header("Location:../../../View/html/index-telefone.html");
    }

   

// Fecha a conexão com o banco de dados
mysqli_close($conn);
          


?>