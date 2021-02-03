<?php

function getProduct(PDO $pdo, int $productId) : array
{
    $result = $pdo -> query("SELECT title, price_ht, vat, description
FROM products
WHERE products.id=$productId");
    return $result->fetch(PDO::FETCH_ASSOC);
}
