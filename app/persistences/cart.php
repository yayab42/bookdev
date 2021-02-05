<?php
require_once 'app/helpers/priceWithVAT.php';
function addProductCart(int $productId, int $quantities) : void
{
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = $_SESSION['cart'][$productId] + $quantities;
    } else {
        $_SESSION['cart'][$productId]=$quantities;
    }
}

function initCart() : array
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    return $_SESSION['cart'];
}

function totalCart($products, $quantities): array
{
    $totalTtcPrice = 0;
    foreach ($products as $id => $product) {
        $ttcPrice = 0;
        $ttcPrice = priceWithVAT($product['price_ht'], $product['vat']) * $quantities[$id];
        $totalTtcPrice = $totalTtcPrice + $ttcPrice;
    }
    $productCount = array_sum($quantities);

    return [$totalTtcPrice, $productCount];
}


