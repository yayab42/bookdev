<?php require 'resources/views/layouts/header.php' ?>
    <main>
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