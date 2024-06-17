<?php
// Exemplo assumindo que "banco.php" está no mesmo diretório que "login-page-adm.php"
require_once '../banco.php';
require_once 'login-verifier.php';

$adm = 10;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
    <link rel="stylesheet" href="stylesLogin.css">
</head>
<body>
<a href="login-page.php" id="trocarLogin">Mudar a forma de login</a>
    <div class="container">
    <div class= "Login">
    <h1>Login Administrador</h1>
    <form method="post" action="">
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu Usuário" required>
        <br>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        <br>
        <input type="submit" value="Entrar">
        <p>Não tem acesso?</p>
        <a href="login-page-usuario.php" class="button" id="Registrar">Entre como usuario</a>
    </form> 
 </div>
 </div>
 </html>
</body>
