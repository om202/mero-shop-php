<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/styles.css" />
    <title>Mero Shop: Buy</title> 
  </head>
  <body>
    <header>
      <h2>  &#x1F6CD; Mero Shop</h2>
      <nav>
        <ul>
          <li><a href="index.php">Buy</a></li>
          <li><a href="add.php">Add</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div id="cart-button"></div>
      <button id="buy-button">Buy All</button>
      <section id="products">
        <!-- Product cards will go here -->
      </section>
    </main>
    <!-- <footer>
      <p>&copy; 2024 Mero Shop</p>
      <p>Pooja Shah</p>
    </footer> -->
    <script src="js/script.js"></script>
    <?php include 'connect.php';?>
  </body>
</html>
