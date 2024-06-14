<?php
require_once 'config.php';

if (isset($_POST['seats']) && !empty($_POST['seats'])) {
    $seats = $_POST['seats'];
    $precoPorAssento = 10.00;
    $totalPreco = calcularPrecoTotal($seats, $precoPorAssento);

    $_SESSION['seats'] = $seats;
    $_SESSION['totalPreco'] = $totalPreco;

    header('Location: resumo.php');
    exit();
} else {
    $_SESSION['message'] = 'Nenhum assento foi selecionado.';
    header('Location: index.php');
    exit();
}
?>
