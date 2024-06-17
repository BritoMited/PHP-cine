<?php


require_once '../Pagamento/config.php';


$logado = false;


if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
        
    $_SESSION['usuario'] = $usuario; 
    $logado = buscarUsuario($usuario, $senha);
   
    if($logado){
        header("Location: ../main/main-page.php");
    }else{
        header("Location: login-page.php");
    }
        
    if($adm = 10){
        $logado = buscarUsuarioADM($usuario, $senha);
        if($logado){
            header("Location: ../Filmes/ColocarFilme.php");
        }
    }
        

} 





?>