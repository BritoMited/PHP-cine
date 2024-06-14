<?php
// Exemplo assumindo que "banco.php" está no mesmo diretório que "login-page-adm.php"
require_once '../banco.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // Verificar se o administrador existe no banco de dados
        buscarUsuarioADM($usuario, $senha);
       
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
</head>
<body>
    <h1>Login Administrador</h1>
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
