<?php

require_once "ShoppingCart.php";

$cart = new ShoppingCart();

$cart->addItem(1, "Laptop", 1, 1000);
$cart->addItem(2, "iPhone", 2, 500);

$cart->displayCart();

$cart->updateQuantity(2, 3);

echo "Total: $" . $cart->getTotal() . "<br>";
?>

<hr>

<?php


$cart->removeItem(1);

$cart->displayCart();
echo "Total: $" . $cart->getTotal() . "<br>";

$cart->clearCart();
?>