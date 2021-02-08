<?php
require 'app/persistences/cart.php';
require 'app/persistences/product.php';

// Initialisation du panier : $cart = initCart();
$cart = initCart();

// Si Formulaire envoyé avec un id de produit et une quantité
if (filter_has_var(INPUT_POST, 'quantity')) {
    // Récupérer les données et les nettoyer
    $qty = filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);
    $product_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    // Les ajoutées au panier
    $cart = addProductCart($product_id, $qty);
}

// Update des quantités
if (filter_has_var(INPUT_POST, 'upload')) {
    $datas = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT);
    $cart = updateProductCart($datas);
}

// Suppression d'un produit
if (filter_has_var(INPUT_GET, 'delete')) {
    $delete_product = filter_input(INPUT_GET, 'delete', FILTER_SANITIZE_NUMBER_INT);
    deleteProductCart($delete_product);

}

if (!empty($_SESSION['cart'])) {
// Populer les tableaux pour la vue et le calcul des prix avec les produits et quantités
    foreach ($cart as $id => $quantity) {
        $products[$id] = getProduct($pdo, $id);
        $quantities[$id] = $quantity;
    }
    $totalAndQuantities = totalCart($products, $quantities);
    $_SESSION['totalAndQuantities'] = $totalAndQuantities;
}else{
    $_SESSION['totalAndQuantities'][0] = 0;
}

require 'resources/views/cart/index.php';