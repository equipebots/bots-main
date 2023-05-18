<?php
    include("../../../Model/connection/conn.php");
    require_once("../../../Model/connection/config.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];  
    $codigo = uniqid();


    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '{$email}'") or die(mysqli_error($conn));

    // Se o retorno for maior do que zero, diz que já existe um usuário.
    if(mysqli_num_rows($sql) > 0) {
        echo json_encode(array('email' => 'Já existe um usuário cadastrado com este email')); 
    } else {
        // Função para validar a força da senha
        function password_strength($senha){
            // Validate password strength
            $uppercase = preg_match("@[A-Z]@", $senha);
            $lowercase = preg_match("@[a-z]@", $senha);
            $number = preg_match("@[0-9]@", $senha);
            $specialChars = preg_match("@[^\w]@", $senha);
          
            if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($senha) < 8) {
                return false;
            } else {
                return true;
            }
        }
        
        // Verifica a força da senha
        if (!password_strength($senha)) {
            echo "A senha não atende aos requisitos de segurança.";
        } else {
            // Insere o usuário no banco de dados
            $conn->query("INSERT INTO usuarios (nome, email, senha, codigo) VALUES ('$nome','$email','$senha', '$codigo')");
            header("Location: ../../../View/html/index-endereco.html");
            exit;
        }
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conn);
?>
