<?php
session_start();

// Check if the cart array is not set, and if so, create it
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = array();
}
?>

<?php
// Start the session
session_start();

// Retrieve the product ID from the form
$product_id = $_POST['product_id'];

// Add the product to the cart array
array_push($_SESSION['cart'], $product_id);

// Redirect the user back to the product page
header("Location: cart.html $product_id");
?>
<?php
// Start the session
session_start();

// Retrieve the product IDs from the cart array
$cart_items = $_SESSION['cart'];

// Retrieve the product information from the database
// ...

// Display the cart contents
echo "<h2>Cart</h2>";
echo "<ul>";
foreach ($cart_items as $cart_item) {
  // Display the product information
  // ...
}
echo "</ul>";
?>
