<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/styles.css">
    <title>BookDev</title>
</head>
<body>
<header>
    <h2> La boutique du Dev </h2>
</header>
<nav class="menu">
    <ul>
        <li><a href="/">Accueil</a></li>
        <?php if (isset($_SESSION['cart']) && isset($_SESSION['totalAndQuantities'])): ?>
            <li class="cart">
                <header>
                    <h3><a href="?action=cart">Panier</a></h3>
                </header>
                <p><?= $_SESSION['totalAndQuantities'][1] ?> produits dans le panier</p>
                <footer>
                    <em>Prix total du panier : <?= number_format($_SESSION['totalAndQuantities'][0],2,'.', ' ') ?> €/TTC</em>
                </footer>
            </li>
        <?php endif; ?>
    </ul>
</nav>