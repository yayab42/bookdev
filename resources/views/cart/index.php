<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <section>
            <h1>Panier</h1>
            <form action="/?action=command" method="post">
                <?php foreach ($products as $id => $product): ?>
                    <?php $price_row_ttc = priceWithVAT($product['price_ht'], $product['vat']) ?>
                    <div class="ligne_commande">
                        <p><img src="resources/img/<?= $id ?>.jpg" alt="<?= $product['title'] ?>"
                                height="80"/></p>
                        <p><?= $product['title'] ?><p>
                        <p>prix unitaire <?= $price_row_ttc ?> €/TTC</p>
                        <p>
                            <label for="quantity_product_<?= $id ?>">Quantité</label>
                            <input id="quantity_product_<?= $id ?>" name="quantity_product_<?= $id ?>" type="number" value="<?= $quantities[$id] ?>"/>
                        </p>
                        <p>Total : <?= $price_row_ttc * $quantities[$id] ?> €/TTC</p>
                    </div>
                <?php endforeach; ?>
                <div class="command_button">Total : <?= $totalAndQuantities[0] ?> €/TTC | <input type="submit" value="Valider le panier"/></div>
            </form>
        </section>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>