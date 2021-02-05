<?php
require 'app/persistences/cart.php';
require 'app/persistences/product.php';

if (filter_has_var(INPUT_POST, 'quantity')) {
    $qty = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $product_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $cart = initCart($product_id, $qty);

    foreach ($cart as $id => $quantity) {
        $products[$id] = getProduct($pdo, $id);
        $quantities[$id] = $quantity;
    }

    $totalAndQuantities = totalCart($products, $quantities);
    $_SESSION['totalAndQuantities'] = $totalAndQuantities;
}

require 'resources/views/cart/index.php';