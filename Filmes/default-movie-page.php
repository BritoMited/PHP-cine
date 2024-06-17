<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ssstyles-movie.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div>
            
            
            <?php
            include '../main/header.html'; 

            require_once "../banco.php";
            
            unset($_SESSION['id_filme']);
            
            $Id_filme = $_GET['id_filme'];
            $_SESSION['id_filme'] = $Id_filme;
            $filme = buscarFilme($Id_filme)->fetch_object();
            
            ?>
            <section class="detalhes-filme">
                <div class="container-2">
                    <h1><?php echo $filme->Titulo; ?></h1>
                    <div class="detalhes-container">
                        <img src="<?php echo $filme->Poster; ?>" alt="<?php echo $filme->Titulo; ?>" class="poster-filme">
                        <div class="informacoes-filme">
                            <p><strong>Diretor:</strong> <?php echo $filme->Diretor; ?></p>
                            <br>
                            <p><strong>Ano:</strong> <?php echo $filme->Lancamento; ?></p>
                            <br>
                            <p><strong>Gênero:</strong> <?php echo $filme->Genero; ?></p>
                            <br>
                            <p><?php echo $filme->Descricao; ?></p>
                            <button><a href="../Pagamento/payment-page.php?id_filme=<?php echo $Id_filme; ?>">COMPRAR</a></button>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
           
</body>
</html>