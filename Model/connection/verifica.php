<?php
require "conn.php ";

if (isset($_SESSION['id']) && isset($_SESSION['id'])) {
    require_once '../../Controller/php/login-usuario/class-login.php';
    $user = new Usuario();
    $userlogado = $user->logget($_SESSION['id']);
    $nomeuser = $userlogado['nome'];

    // Verifica se a variável de sessão "last_activity" não está definida
    if (!isset($_SESSION['last_activity'])) {
        $_SESSION['last_activity'] = time();
    }

    // Verifica se o tempo de inatividade é superior a 30 minutos
    if (time() - $_SESSION['last_activity'] > 1800) {
        // Redireciona o usuário para a página de logout
        header('Location: ../../Controller/php/dashboard.php');
        exit();
    }

    // Atualiza a variável de sessão "last_activity" com a hora atual
    $_SESSION['last_activity'] = time();
} else {
    // Usuário não está logado, faça o tratamento necessário
}
?>
