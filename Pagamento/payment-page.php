<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionador de Assentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cinema-container">
        <div class="screen"></div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
        <div class="row">
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat"></div>
        </div>
    </div>
    <p class="text">Você selecionou <span id="count">0</span> assento(s) para um preço total de R$ <span id="total">0</span></p>
    
    <div class="payment-container">
        <h2>Informações de Pagamento</h2>
        <form id="payment-form">
            <div class="form-group">
                <label for="name">Nome no cartão</label>
                <input type="text" id="name" required>
            </div>
            <div class="form-group">
                <label for="card-number">Número do cartão</label>
                <input type="text" id="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry">Data de validade (MM/AA)</label>
                <input type="text" id="expiry" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" required>
            </div>
            <button type="submit">Finalizar Compra</button>
        </form>
        <p id="payment-message"></p>
    </div>

    <script src="script.js"></script>
</body>
</html>
