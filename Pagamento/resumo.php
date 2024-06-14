<?php require_once 'config.php'; ?>
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
    if (isset($_SESSION['seats']) && !empty($_SESSION['seats'])) {
        $seats = $_SESSION['seats'];
        $totalPreco = $_SESSION['totalPreco'];

        echo '<p>Assentos Selecionados:</p>';
        echo '<ul>';
        foreach ($seats as $seat) {
            echo '<li>' . htmlspecialchars($seat) . '</li>';
        }
        echo '</ul>';
        echo '<p>Total a Pagar: R$ ' . number_format($totalPreco, 2, ',', '.') . '</p>';

        // Limpar a sessão após exibir o resumo
        session_unset();
        session_destroy();
    } else {
        echo '<p>Nenhum assento foi selecionado.</p>';
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>
