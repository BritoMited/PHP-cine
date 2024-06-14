<?php
require_once '../banco.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        criarUsuario($usuario, $senha);
       
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesLogin.css">
</head>
<body> 
    <div class= "Login">
    <h1>Registrar Usuario</h1>
    <form method="post" action="">
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu Usuário" required>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <br>
        <input type="submit" value="Registrar">
        <p>Já tem uma conta?</p>
        <a href="login-page-usuario.php" class="button" id="Registrar">Entre</a>
    </form> 
 </div>
</body>
</html>
