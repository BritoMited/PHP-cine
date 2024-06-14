const container = document.querySelector('.cinema-container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const ticketPrice = 10; // preço do ingresso

// Atualiza a contagem e o preço total
function updateSelectedCount() {
    const selectedSeats = document.querySelectorAll('.row .seat.selected');
    const selectedSeatsCount = selectedSeats.length;

    count.innerText = selectedSeatsCount;
    total.innerText = selectedSeatsCount * ticketPrice;
}

// Evento de clique no contêiner de assentos
container.addEventListener('click', (e) => {
    if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
        e.target.classList.toggle('selected');
        updateSelectedCount();
    }
});

// Lidar com o formulário de pagamento
const paymentForm = document.getElementById('payment-form');
const paymentMessage = document.getElementById('payment-message');

paymentForm.addEventListener('submit', (e) => {
    e.preventDefault();

    // Capturar dados do formulário
    const name = document.getElementById('name').value;
    const cardNumber = document.getElementById('card-number').value;
    const expiry = document.getElementById('expiry').value;
    const cvv = document.getElementById('cvv').value;

    // Simular uma chamada de API de pagamento
    setTimeout(() => {
        // Simular uma resposta de sucesso
        paymentMessage.innerText = 'Pagamento realizado com sucesso!';
        paymentMessage.style.color = 'green';
    }, 1000);
});
