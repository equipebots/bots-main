<?php
include("../../../Model/connection/conn.php");
$error = array();

// Se houver erros, você pode exibi-los na mesma página ou redirecionar para uma página de erro
if (count($error) > 0) {
    header("Location: ../../View/html/error.html"); // Página de erro
    exit();
}

// Validar o e-mail e verificar se está registrado no banco de dados
if (isset($_POST['submit'])) {
    $email = $conn->escape_string($_POST['email']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "E-mail inválido";
    } else {
        $sql = "SELECT codigo FROM usuarios WHERE email = '$email'";
        $query = $conn->query($sql);
        $dados = $query->fetch_assoc();
        $total = $query->num_rows;

        if ($total == 0) {
            $error[] = "Email não cadastrado";
        } elseif (count($error) == 0 && $total > 0) {
            // Gerar um token aleatório único
            $novacripto = bin2hex(random_bytes(15));

            // Atualizar o código no banco de dados
            $updateSql = "UPDATE usuarios SET codigo = ? WHERE email = ?";
            $stmt = $conn->prepare($updateSql);
            $stmt->bind_param("ss", $novacripto, $email);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Enviar um e-mail para o usuário com o link de redefinição de senha
                $resetLink = "https://bots.com/codigo-senha.php?token=$novacripto";
                $subject = "Redefinição de senha";
                $message = "Para redefinir sua senha, clique no link a seguir: $resetLink";
                $headers = "From: equipebots7@gmail.com";

                if (mail($email, $subject, $message, $headers)) {
                    echo "Um e-mail com as instruções de redefinição de senha foi enviado para o seu endereço de e-mail.";
                } else {
                    $error[] = "Erro ao enviar o e-mail";
                }
            }
        }
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
