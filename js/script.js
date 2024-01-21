// Sample data for products
// later come from a database
const products = [
  { id: 1, name: 'Nike Cortez Shoes, Black', price: 19.99 },
  { id: 2, name: 'Quantum Smartwatch', price: 29.99 },
  { id: 3, name: 'Bravo Office Jacket', price: 39.99 },
  { id: 4, name: 'Galactic Gaming Mouse', price: 24.99 },
];

// Initialize cart
let cart = {
  items: 0,
  total: 0
};

// Function to display products
function displayProducts() {


  const productsSection = document.getElementById('products');

  products.forEach(product => {
      const card = document.createElement('div');
      card.classList.add('product-card');
      card.innerHTML = `
          <h3 class="product-title">${product.name}</h3>
          <p class="product-price">$${product.price.toFixed(2)}</p>
          <button class="product-button" onclick="addToCart(${product.id})">Add to Cart</button>
      `;
      productsSection.appendChild(card);
  });

  updateCartButton();
}

// Function to add product to cart (you can implement this as needed)
function addToCart(productId) {
  // Find the product
  const product = products.find(p => p.id === productId);

  // Update cart
  cart.items += 1;
  cart.total += product.price;

  // Update cart button
  updateCartButton();

  console.log(`Product ${productId} added to cart`);
}

// Function to update cart button
function updateCartButton() {
  const cartButton = document.getElementById('cart-button');
  cartButton.textContent = `Cart (${cart.items}) - Total Price: $${cart.total.toFixed(2)}`;
}

// Display products when the page loads
window.onload = displayProducts;
