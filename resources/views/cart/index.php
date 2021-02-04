<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <section>
            <h1>Panier</h1>
            <form action="/?action=command" method="post">
                <table>
                    <thead>
                    <td>#</td>
                    <td>Article</td>
                    <td>Prix unitaire TTC</td>
                    <td>Quantité</td>
                    <td>Total TTC</td>
                    </thead>
                    <tr>
                        <td colspan="5">
                            <hr>
                        </td>
                    </tr>
                    <?php foreach ($products as $id => $product): ?>
                        <?php $price_row_ttc = priceWithVAT($product['price_ht'], $product['vat']) ?>
                        <tr>
                            <td><img src="resources/img/<?= $id ?>.jpg" alt="<?= $product['title'] ?>"
                                     height="80"/></td>
                            <td><?= $product['title'] ?></td>
                            <td><?= number_format($price_row_ttc,2,'.', ' ') ?> €</td>
                            <td>
                                <input id="quantity_product_<?= $id ?>" name="quantity_product_<?= $id ?>" type="number"
                                       value="<?= $quantities[$id] ?>"/>
                            </td>
                            <td><?= number_format($price_row_ttc * $quantities[$id], 2, '.', ' ') ?> €</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <hr>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4"></td>
                        <td>Total : <?= number_format($totalAndQuantities[0],2,'.', ' ') ?> €/TTC</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td><input type="submit" value="Valider le panier"/></td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>