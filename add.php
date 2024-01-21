<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="stylesheet" href="styles/add.css" />
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
      <form>
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" />
        <label for="price">Product Price</label>
        <input type="number" id="price" name="price" />
        <button type="submit" id="add-item">Add Item</button>
      </form>
    </main>
    <footer>
      <p>&copy; 2024 Mero Shop</p>
      <p>Pooja Shah</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/add.js"></script>
  </body>
</html>
