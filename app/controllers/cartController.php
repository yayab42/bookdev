<?php
require 'app/persistences/cart.php';
require 'app/persistences/product.php';

// Si Formulaire envoyé avec un id de produit et une quantité
if (filter_has_var(INPUT_POST, 'quantity')) {
    // Récupérer les données et les nettoyer
    $qty = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $product_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    // Les ajoutées au panier
    addProductCart($product_id, $qty);
}

// Initialisation du panier : $cart = initCart();
$cart = initCart();

// Populer les tableaux pour la vue et le calcul des prix avec les produits et quantités
foreach ($cart as $id => $quantity) {
    $products[$id] = getProduct($pdo, $id);
    $quantities[$id] = $quantity;
}

$totalAndQuantities = totalCart($products, $quantities);
$_SESSION['totalAndQuantities'] = $totalAndQuantities;

require 'resources/views/cart/index.php';