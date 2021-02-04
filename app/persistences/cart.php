<?php
require_once 'app/helpers/priceWithVAT.php';

// Fonction qui peuple le panier
function fakeCart() {
    $_SESSION['cart'][5] = 3;
    $_SESSION['cart'][3] = 1;
    $_SESSION['cart'][1] = 2;
}

// Fonction qui initialise le panier en fonction de la session
function initCart() {
    if(!isset($_SESSION)) {
        $_SESSION['cart']= [];
        fakeCart();
    }
    return $_SESSION['cart'];

}

function totalCart($products, $quantities) :array{
    $totalTtcPrice = 0;
    foreach ($products as $id => $product){
        $ttcPrice = 0;
        $ttcPrice = priceWithVAT($product['price_ht'], $product['vat']) * $quantities[$id];
        $totalTtcPrice = $totalTtcPrice + $ttcPrice;
    }
    $productCount = array_sum($quantities);

    return [$totalTtcPrice, $productCount];

}


