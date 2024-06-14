<?php
require_once '../banco.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
     buscarUsuario($usuario, $senha);
       
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
   <a href="login-page.php" id="trocarLogin">Mudar a forma de login</a>
    <div class="container">
    <div class= "Login">
    <h1>Login Usuario</h1>
    <form method="post" action="">
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu Usuário" required>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <br>
        <input type="submit" value="Entrar">
        <p>Não tem uma conta?</p>
        <a href="registrar-usuario.php" class="button" id="Registrar">Registre-se</a>
    </form> 
 </div>
</div>
</body>
</html>
