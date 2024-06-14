<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Assentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Selecione seus Assentos</h1>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p>' . $_SESSION['message'] . '</p>';
        unset($_SESSION['message']);
    }
    ?>
    <form action="process.php" method="POST">
        <div class="cinema-container">
            <div class="screen"></div>
            <div class="row">
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <div class="seat"><label><input type="checkbox" name="seats[]" value="A<?php echo $i; ?>">A<?php echo $i; ?></label></div>
                <?php endfor; ?>
            </div>
            <div class="row">
                <?php for ($i = 1; $i <= 8; $i++): ?>
                    <div class="seat"><label><input type="checkbox" name="seats[]" value="B<?php echo $i; ?>">B<?php echo $i; ?></label></div>
                <?php endfor; ?>
            </div>
            <!-- Adicione mais linhas conforme necessário -->
        </div>
        <button type="submit">Comprar</button>
    </form>
</body>
</html>
