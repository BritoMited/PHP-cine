<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seleção de Assentos</title>
        <link rel="stylesheet" href="paymentt.css">
    </head>
    <body>
        
        
                <?php
                    include '../main/header.html';
                    require_once 'config.php';
                    require_once '../banco.php';
                    
                    if (isset($_SESSION['message'])) {
                        echo '<p>' . $_SESSION['message'] . '</p>';
                        unset($_SESSION['message']);
                    }
                    
                    
                    $_SESSION['id_filme'] = $_GET['id_filme'];
                    
                    $Id_filme = $_SESSION['id_filme'];
                ?>
            <h1>Selecione seus Assentos</h1>
    <form action="process.php?id_filme=<? $Id_filme ?>" method="POST">
        <div class="cinema-container">
            <div class="screen"></div>
            <div class="row">

                <?php for ($i = 1; $i <= 12; $i++){
                    
                    $value = "D" . $i;

                        if(buscarAssento($Id_filme, $value)){

                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="D'.$i.'" disabled>';
                            echo           '<span class="slider"></span>';
                            echo '</div>';

                        }else{
                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="D'.$i.'">D'.$i.'';
                            echo           '<span class="slider"></span>';
                            echo '</div>';
                        }
                } 
                ?>
                
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 12; $i++){

                        $value = "C" . $i;

                        if(buscarAssento($Id_filme, $value)){

                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="C'.$i.'" disabled>';
                            echo           '<span class="slider"></span>';
                            echo '</div>';

                        }else{
                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="C'.$i.'">C'.$i.'';
                            echo           '<span class="slider"></span>';
                            echo '</div>';
                        }
                        
                    } 
                    ?>
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 8; $i++){
                        
                        $value = "B" . $i;

                        if(buscarAssento($Id_filme, $value)){

                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="B'.$i.'" disabled>';
                            echo           '<span class="slider"></span>';
                            echo '</div>';

                        }else{
                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="B'.$i.'">B'.$i.'';
                            echo           '<span class="slider"></span>';
                            echo '</div>';
                        }
                    } 
                    ?>
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 8; $i++){
                        
                        $value = "A" . $i;

                        if(buscarAssento($Id_filme, $value)){

                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="A'.$i.' disabled>';
                            echo           '<span class="slider"></span>';
                            echo '</div>';

                        }else{
                            echo '<div class="seat">';
                            echo    '<label class="switch" >';
                            echo        '<input type="checkbox" name="seats[]" value="A'.$i.'" >A'.$i.'';
                            echo           '<span class="slider"></span>';
                            echo '</div>';
                        }
                    } 
                    ?>
            </div>
          
        </div>
        
        <div class="tela">
            <h1>tela</h1>
        </div>
    
        <button type="submit">Comprar</button>
    </form>
</body>
</html>
