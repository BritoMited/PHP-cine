<?php

require_once '../banco.php';
require_once '../Login/login-verifier.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estyles.css">
</head>
<body>
<?php include 'header.html'; ?>
    

  <section class="destaques">
  <div class="container">
        <?php
        $query = "SELECT Id, Titulo, Poster FROM listafilmes";
        $result = $banco->query($query);

        while ($row = $result->fetch_object()) {
            echo "<div class='destaque'>";
            echo "<a href='../Filmes/default-movie-page.php?id_filme=". $row->Id ."'><img src='". $row->Poster ."' alt='Poster do Filme'></a>";
            echo "<h2>" . $row->Titulo . "</h2>";
            echo "</div>";
        }
        ?>
    </div>
    </section>

    
    <footer>
        <div class="container">
            <p>&copy; 2024 Cinema The Wolfs Gang. Todos os direitos reservados.</p>
            <div class="social">
                <a href="#">Facebook</a> | 
                <a href="#">Twitter</a> | 
                <a href="#">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
