
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo da Compra</title>
</head>
<body>
    <h1>Resumo da Compra</h1>
    <?php

    $seats = null;
    $totalPreco = null;

    require_once 'config.php';
    require_once '../banco.php';

    if (isset($_SESSION['seats'])) {

        $seats = $_SESSION['seats'];
        $totalPreco = $_SESSION['totalPreco'];

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
    criarIngresso(8,4,$seat,$totalPreco/sizeof($seats));

    session_unset();
    session_destroy();

    header('Location: payment-page.php');
}


?>

</body>
</html>
