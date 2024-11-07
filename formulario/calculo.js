const noitesInput = document.getElementById('noites');
const hospedesInput = document.getElementById('hospedes');
const valorTotalInput = document.getElementById('valor-total');

noitesInput.addEventListener('input', calcularValorTotal);
hospedesInput.addEventListener('input', calcularValorTotal);

function calcularValorTotal() {
    const noites = parseInt(noitesInput.value);
    const hospedes = parseInt(hospedesInput.value);
    const precoPorNoite = 45.7; // Defina o preço por noite por pessoa aqui

    const valorTotal = noites * hospedes * precoPorNoite;
    valorTotalInput.value = valorTotal.toFixed(2);
}