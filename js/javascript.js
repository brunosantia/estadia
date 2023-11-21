let cart = [];
let total = 0;

function addToCart(price) {
  cart.push(price);
  total += price;
  displayCart();
}

function displayCart() {
  const cartItems = document.getElementById("cart-items");
  cartItems.innerHTML = "";

  cart.forEach(item => {
    const li = document.createElement("li");
    li.textContent = `Producto: $${item}`;
    cartItems.appendChild(li);
  });

  const totalSpan = document.getElementById("cart-total");
  totalSpan.textContent = total;
}

function checkout() {
  if (cart.length === 0) {
    alert("El carrito está vacío");
  } else {
    const message = `¡Nuevo pedido! Total: $${total}. Productos: ${cart.length}`;
    sendMessageToWhatsApp(message);
    alert(`Pedido enviado a WhatsApp. Total a pagar: $${total}`);
    cart = [];
    total = 0;
    displayCart();
  }
}

function sendMessageToWhatsApp(message) {
  // Simulación de enviar el mensaje a WhatsApp
  console.log(`Mensaje enviado a WhatsApp: ${message}`);
  // Aquí deberías usar una API real para enviar el mensaje a WhatsApp
}
