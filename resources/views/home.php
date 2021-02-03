<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <section class="content">
            <?php foreach ($products as $product): ?>
                <article class="produit">
                    <header>
                        <h3> <?= $product['title'] ?> </h3>
                    </header>
                    <img src="resources/img/<?= $product['id'] ?>.jpg" />
                    <p> Description du produit : <?= $product['description'] ?></p>
                    <footer>
                        <em>Prix HT : <?= $product['price_ht'] ?> €/HT</em> | <em>Poids : <?= $product['weight'] ?>
                            g</em>
                        | <em>Quantité en stock : <?= $product['stock'] ?></em>
                    </footer>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>