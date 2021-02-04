<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <section>
            <h1>Panier</h1>
            <form action="" method="post">
                <?php foreach ($products as $id => $product): ?>
                <?php $price_row_ttc = priceWithVAT($product['price_ht'], $product['vat']) ?>
                    <div>
                        <p><img src="resources/img/<?= $id ?>.jpg" alt="<?= $product['title'] ?>"
                                height="80"/> <?= $product['title'] ?> | prix unitaire
                            : <?= $price_row_ttc ?> €/TTC | Quantité <input
                                    type="number" value="<?= $quantities[$id] ?>"/> | Total :  <?= $price_row_ttc * $quantities[$id] ?> €/TTC</p>
                    </div>
                <?php endforeach; ?>
                <p>Total : <?= $totalAndQuantities[0] ?> €/TTC</p>
                <div>
                    <input type="submit" value="Valider le panier"/>
                </div>
            </form>
        </section>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>