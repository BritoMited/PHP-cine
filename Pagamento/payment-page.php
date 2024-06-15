<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Seleção de Assentos</title>
        <link rel="stylesheet" href="payment.css">
    </head>
    <body>
        <h1>Selecione seus Assentos</h1>
        <?php
            require_once 'config.php';

            if (isset($_SESSION['message'])) {
                echo '<p>' . $_SESSION['message'] . '</p>';
                unset($_SESSION['message']);
            }
        ?>
    <form action="process.php" method="POST">
        <div class="cinema-container">
            <div class="screen"></div>
            <div class="row">

                <?php for ($i = 1; $i <= 8; $i++){
                    
                    echo '<div class="seat">';
                    echo    '<label class="switch" >';
                    echo        '<input type="checkbox" name="seats[]" value="A'.$i.'">A'.$i.'';
                    echo           '<span class="slider"></span>';
                    echo   '</label>';
                    echo '</div>';
                } 
                ?>
                
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 8; $i++){
                        
                        echo '<div class="seat">';
                        echo    '<label class="switch" >';
                        echo        '<input type="checkbox" name="seats[]" value="B'.$i.'">B'.$i.'';
                        echo           '<span class="slider"></span>';
                        echo '</div>';
                    } 
                    ?>
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 8; $i++){
                        
                        echo '<div class="seat">';
                        echo    '<label class="switch" >';
                        echo        '<input type="checkbox" name="seats[]" value="C'.$i.'">C'.$i.'';
                        echo           '<span class="slider"></span>';
                        echo '</div>';
                    } 
                    ?>
            </div>
            <div class="row">

                    <?php for ($i = 1; $i <= 8; $i++){
                        
                        echo '<div class="seat">';
                        echo    '<label class="switch" >';
                        echo        '<input type="checkbox" name="seats[]" value="D'.$i.'">D'.$i.'';
                        echo           '<span class="slider"></span>';
                        echo '</div>';
                    } 
                    ?>
            </div>
          
        </div>
        

    
        <button type="submit">Comprar</button>
    </form>
</body>
</html>
