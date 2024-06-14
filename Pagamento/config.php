<?php
// config.php

session_start();

// Função para calcular o preço total
function calcularPrecoTotal($seats, $precoPorAssento) {
    return count($seats) * $precoPorAssento;
}
?>
