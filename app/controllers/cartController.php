<?php
require 'app/persistences/cart.php';
require 'app/persistences/product.php';

$cart = initCart();

foreach ($cart as $id => $quantity) {
    $products[$id] = getProduct($pdo, $id);
    $quantities[$id] = $quantity;
}
$totalAndQuantities = totalCart($products, $quantities);

require 'resources/views/cart/index.php';