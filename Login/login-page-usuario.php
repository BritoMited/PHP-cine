<?php
session_start();
include "../banco.php"; // Inclui o arquivo que contém as funções do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Verifica no banco de dados de usuários normais
    $usuarioEncontrado = buscarUsuario($usuario, $senha);

    if ($usuarioEncontrado) {
        $_SESSION["usuario"] = $usuarioEncontrado["usuario"];
        echo "Login de usuário realizado com sucesso!";
        // Aqui você pode redirecionar para a área restrita dos usuários
        // Exemplo: header("Location: area_restrita.php");
    } else {
        // Verifica no banco de dados de administradores
        $adminEncontrado = buscarUsuarioADM($usuario, $senha);
        if ($adminEncontrado) {
            $_SESSION["admin"] = $adminEncontrado["usuario"];
            echo "Login de administrador realizado com sucesso!";
            // Aqui você pode redirecionar para a área administrativa
            // Exemplo: header("Location: area_admin.php");
        } else {
            echo "Usuário ou senha inválidos.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
