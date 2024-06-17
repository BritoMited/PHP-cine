<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estyles.css">
    <title>Home</title>
</head>
<body>

<?php include '../main/header.html'; ?>

<div class="cadastroFilmes">
    <form method="post">
        <label>Titulo: </label>
        <input type="text" name="titulo" required>
        <br>
        <label>Descrição: </label>
        <input type="text" name="descricao" required>
        <br>
        <label>Data de Lançamento: </label>
        <input type="text" name="data_lancamento" required>
        <br>
        <label>Duração: </label>
        <input type="text" name="duracao" required>
        <br>
        <label>Gênero: </label>
        <input type="text" name="genero" required>
        <br>
        <label>Diretores(a): </label>
        <input type="text" name="diretores" required>
        <br>
        <label>Elenco: </label>
        <input type="text" name="elenco" required>
        <br>
        <label>Rating: </label>
        <input type="text" name="rating" required>
        <br>
        <label>Poster: </label>
        <input type="text" name="poster" required>
        <br>
        <label>Trailer: </label>
        <input type="text" name="trailer" required>
        <br>
        <input type="submit" name="" id="" required>
    </form>
</div>
    
    <?php
     
    require_once '../banco.php';

    $titulo = $_POST['titulo'] ?? "";
    $descricao = $_POST['descricao'] ?? "";
    $data_lancamento = $_POST['data_lancamento'] ?? "";
    $duracao = $_POST['duracao']  ?? "";
    $genero = $_POST['genero'] ?? "";
    $diretores = $_POST['diretores'] ?? "";
    $elenco = $_POST['elenco'] ?? "";
    $rating = $_POST['rating'] ?? "";
    $poster = $_POST['poster'] ?? "";
    $trailer = $_POST['trailer'] ?? "";

    criarFilme($titulo, $descricao,$data_lancamento,$duracao,$genero,$diretores,$elenco,$rating,$poster,$trailer);
     
     
    ?>


</body>
</html>