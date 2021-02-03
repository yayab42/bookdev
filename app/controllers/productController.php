<?php
require 'app/persistences/product.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$product = getProduct($pdo, $id);
$finalPrice = priceWithVAT($product['price_ht'], $product['vat']);

if (filter_has_var(INPUT_GET, 'id')) {
    require 'resources/views/product/show.php';
} else {
    get404();
}
