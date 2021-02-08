<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Varela+Round&display=swap" rel="stylesheet">
    <title>BookDev</title>
</head>
<body>
<header id="header_general">
    <p id="logo"> La boutique du Dev </p>
    <nav class="menu">
        <div class="accueil"><a href="/">Accueil</a></div>
            <?php if (isset($_SESSION['cart'])): ?>
        <a href="?action=cart"><div class="cart">
                    <header>
                        <h3>Panier :</h3>
                    </header>
                    <?php if ($_SESSION['totalAndQuantities'][0] > 0): ?>
                        <p><?= $_SESSION['totalAndQuantities'][1] ?> produits dans le panier</p>
                        <footer>
                            <em> Prix total du panier : <?= number_format($_SESSION['totalAndQuantities'][0],
                                    2, '.', ' ') ?> €/TTC</em>
                        </footer>
                    <?php else: ?>
                        <p>0 produits</p>
                    <?php endif; ?>
            </div></a>
            <?php else: ?>
        <a href="?action=cart"><div class="cart">
                    <header>
                        <h3>Panier</h3>
                    </header>
                    <p>0 produits</p>
            </div></a>
            <?php endif; ?>
        </ul>
    </nav>
</header>
