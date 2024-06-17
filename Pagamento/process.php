<?php
require_once 'config.php';

require_once '../banco.php';



if (isset($_POST['seats'])) {
    $seats = $_POST['seats'];
    $precoPorAssento = 10.00;
    $totalPreco = calcularPrecoTotal($seats, $precoPorAssento);
   

    

    $_SESSION['seats'] = $seats;
    $_SESSION['totalPreco'] = $totalPreco;
    

    header('Location: resumo.php');
    exit();
} else {
    $_SESSION['message'] = 'Nenhum assento foi selecionado.';
    header('Location: payment-page.php');
    exit();
}
?>
