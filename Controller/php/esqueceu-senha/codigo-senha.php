<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu a senha | Bots</title>
     <!--Icone do title-->
     <link rel="icon" href="../style/midia/logo_sem_nome.png">
</head>
<body>
<form  action="../../Controller/php/esqueceu-senha.php"method="POST" enctype="multipart/form-data">
    <h1>
        Alterar senha
    </h1>
        <label>Digite seu codigo: <input type="text" name="codigo"></label>
        <label>Digite sua nova senha: <input type="text" name="nova_senha"></label>
        <label>Confirme sua nova senha: <input type="text" name="nova_senha"></label>
        
        <button id="save-btn" type="submit" class="btn btn-primary" name="submit">Alterar</button>
    </form>
</body>
</html>
<?php
 
 <?php
include ("../../Model/connection/conn.php");

if (isset($_POST['submit'])) {
    $error = array();
    $email = $conn->escape_string($_POST['email']);
    $codigo = $conn->escape_string($_POST['codigo']);
    $novaSenha = $conn->escape_string($_POST['nova_senha']);

    // Verificar se o código e o e-mail correspondem
    $sql = "SELECT id FROM usuarios WHERE email = '$email' AND codigo = '$codigo'";
    $query = $conn->query($sql) or die($conn->error);
    $total = $query->num_rows;

    if ($total == 0) {
        $error[] = "Código inválido";
    } else {
        // Atualizar a senha no banco de dados
        $hashedSenha = password_hash($novaSenha, PASSWORD_DEFAULT);

        $updateSql = "UPDATE usuarios SET senha = '$hashedSenha' WHERE email = '$email'";
        $conn->query($updateSql) or die($conn->error);

        // Redirecionar para a página de sucesso
        header("Location: ../../View/html/senha-alterada.html");
        exit();
    }
}

//Se houver erros, você pode exibi-los na mesma página ou redirecionar para uma página de erro
if (count($error) > 0) {
    header("Location: ../../View/html/error.html"); // Página de erro
    exit();
}
?>

