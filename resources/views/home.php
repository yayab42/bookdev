<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <section class="intro">
            <h1>Les meilleurs livres pour les développeurs</h1>
            <p>Vous trouverez ici de nombreuses références de livres pour les développeurs.<br>
            Des livres dédiés aux différents systèmes d'exploitation, aux langages de programmation, aux logiciels de développement.</p>
        </section>
        <h2 class="soustitre">Nos livres informatique</h2>
        <section class="content">
            <?php foreach ($products as $product): ?>
                <article class="produit">
                    <header>
                        <a href="/?action=product&id=<?= $product['id'] ?>"><h3><?= $product['title'] ?></h3></a>
                    </header>
                    <div class="product_content">
                        <a href="/?action=product&id=<?= $product['id'] ?>"><img
                                    src="resources/img/<?= $product['id'] ?>.jpg" alt="<?= $product['title'] ?>"
                                    height="150"/></a>
                        <p><?= $product['description'] ?></p>
                    </div>

                    <footer>
                        <em>Prix HT : <?= number_format($product['price_ht'], 2, '.', ' ') ?> €/HT</em> | <em>Poids
                            : <?= $product['weight'] ?>
                            g</em>
                        | <em>Quantité en stock : <?= $product['stock'] ?></em>
                    </footer>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>