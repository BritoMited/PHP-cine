<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <img  alt="Cinema XYZ" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Filmes</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="detalhes-filme">
        <div class="container">
            <?php
            require_once '../banco.php';
            
            $busca = listarFilmes();

         ?>

<table style="width: 50%;">
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Descricao</th>
        <th>Lancamento</th>
        <th>Duracao</th>
        <th>Genero</th>
        <th>Diretor</th>
        <th>Elenco</th>
        <th>Nota</th>
        <th>Poster</th>
        <th>Trailer</th>
        <th></th>
    </tr>
    
    <?php 
        while ($obj = $busca->fetch_object()) { 
            echo "<tr>";
            //echo print_r($obj_smartphone);
            echo "<td>$obj->Id</td>";
            echo "<td>$obj->Titulo</td>";
            echo "<td>". $obj->Descricao ."</td>";
            echo "<td>$obj->Duracao</td>";
            echo "<td>$obj->Genero</td>";
            echo "<td>". $obj->Diretor ."</td>";
            echo "<td>$obj->Elenco</td>";
            echo "<td>$obj->Nota</td>";
            echo "<td>". $obj->Poster ."</td>";
            echo "<td>$obj->Trailer</td>";
            echo "<td><a href=\"editar.php?p=" . $obj->Id . "\">editar</a> </td>";
            echo "</tr>";
        }
    ?>

    </table>


        </div>
    </section>
</body>
</html> 
           
