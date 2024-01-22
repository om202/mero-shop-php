const infobar = document.getElementById('infobar');

// Initialize cart
let cart = {
  items: 0,
  total: 0
};

// Function to display products
function displayProducts() {
  infobar.style.display = 'none';
  updateCartButton();
}

// Function to add product to cart (you can implement this as needed)
function addToCart(product) {
  infobar.style.display = 'block';
  // Update cart
  cart.items += 1;
  cart.total += Number(product.price);

  console.log(product.price);

  updateCartButton();

  const info = `Product ${product.id} added to cart`;
  infobar.textContent = info;
  setTimeout(() => {
    infobar.textContent = '';
    infobar.style.display = 'none';
  }, 3000);
}

// Function to update cart button
function updateCartButton() {
  const cartButton = document.getElementById('cart-button');
  cartButton.textContent = `Cart (${cart.items}) - Total Price: Rs. ${cart.total.toFixed(2)}`;
}

// Display products when the page loads
window.onload = displayProducts;
