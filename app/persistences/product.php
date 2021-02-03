<?php

function getAllProducts(PDO $pdo): array
{
    $statement = $pdo->query('SELECT *
    FROM products');
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
