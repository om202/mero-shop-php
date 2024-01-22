<?php
$servername = "localhost";
$username = "local";
$password = "12345";
$dbname = "mero"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";

$result = $conn->query($sql);
echo "<section id='products'>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='product-card'>";
    echo "<p class='product-id'>" . $row["id"] . "</p>";
    echo "<p class='product-title'>" . $row["name"] . "</p>";
    echo "<p class='product-price'>Rs. " . number_format($row["price"], 2) . "</p>";
    echo "<p class='product-quantity'> In Stock: " . number_format($row["quantity"], 0) . "</p>";
    echo "<button class='product-button' onclick='addToCart(" .json_encode($row). ")'>Add to Cart</button>";
    echo "</div>";
  }
} else {
  echo "0 results";
}
echo "</section>";
$conn->close();
?>