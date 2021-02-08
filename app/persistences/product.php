<?php
function getAllProducts(PDO $pdo): array
{
    $statement = $pdo->query('SELECT *
    FROM products');
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getProduct(PDO $pdo, int $productId): array
{
    $result = $pdo->query("SELECT id, title, price_ht, vat, description
FROM products
WHERE products.id=$productId");
    return $result->fetch(PDO::FETCH_ASSOC);
}