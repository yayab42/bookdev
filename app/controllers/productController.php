<?php
$productId = filter_input(INPUT_GET, 'productId', FILTER_SANITIZE_NUMBER_INT);
$product = getProduct($pdo, $productId);
$finalPrice = ($productId['price_ht'])+($productId['price_ht']*$productId['vat'])/100;
if (!empty($product)) {
    require '../../resources/views/product/show.php';
}
    else {
        //CI DESSOUS A CHANGER EN PATH REEL
        require $route['404'];
    }
