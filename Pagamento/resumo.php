<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Compra</title>
    <link rel="stylesheet" href="resumostyle.css">
</head>
<body>
<?php include '../main/header.html'; 
    
    
    
    require_once 'config.php';
    require_once '../banco.php';
    
    $seats = null;
    $totalPreco = null;
    $Id_filme = $_SESSION['id_filme'];
    $usuario = $_SESSION['usuario'];
    
?>

<h1>Resumo da Compra</h1>

    <?php
    if (isset($_SESSION['seats'])) {

        $seats = $_SESSION['seats'];
        $totalPreco = $_SESSION['totalPreco'];

        echo '<p>Usuario: '.$usuario.'</p>';

        $nome_filme = buscarFilme($Id_filme)->fetch_object();

        echo '<p>Filme: '.$nome_filme->Titulo.'</p>';

        echo '<p>Assentos Selecionados:</p>';
        echo '<ul>';
        foreach ($seats as $seat) {
            echo '<li>' . $seat . '</li>';
    }
    echo '</ul>';
    echo '<p>Total a Pagar: R$ ' . number_format($totalPreco, 2, ',', '.') . '</p>';

    

    // Limpar a sessão após exibir o resumo
   
} else {
    echo '<p>Nenhum assento foi selecionado.</p>';
}
?>
<a href="payment-page.php">Voltar</a>
<form method="post">
<button name="compra" value="comprar">finalizar compra</button>
</form>
<!-- quando clicar no botao de finalizar, ele limpa 

session_unset();
session_destroy(); -->
<?php

$compra = $_POST['compra'] ?? null;
 
if($compra == "comprar"){
    
    foreach($seats as $seat){
    criarIngresso($usuario, $Id_filme,$seat,$totalPreco/sizeof($seats));
}
    header('Location: payment-page.php?id_filme= ' . $Id_filme);
}


?>
</body>
</html>