<?php
require_once 'app/helpers/priceWithVAT.php';
function addProductCart(int $productId, int $quantities): array
{
    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = $_SESSION['cart'][$productId] + $quantities;
    } else {
        $_SESSION['cart'][$productId] = $quantities;
    }

    return $_SESSION['cart'];
}

function initCart(): array
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

function updateProductCart(array $datas): array
{
    foreach ($_SESSION['cart'] as $id => $quantity) {
        if ($id != 'upload') {
            if ($datas[$id] == 0) {
                unset($_SESSION['cart'][$id]);
            } else {
                $_SESSION['cart'][$id] = $datas[$id];
            }
        }
    }
    return $_SESSION['cart'];
}
function deleteProductCart($id)
{
    unset($_SESSION['cart'][$id]);
}