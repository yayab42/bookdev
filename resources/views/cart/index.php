<?php require 'resources/views/layouts/header.php' ?>
    <main>
    <section>
    <h1>Panier</h1>
<?php if (!empty($_SESSION['cart'])): ?>
    <form action="/?action=cart" method="post">
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
                    <td><?= number_format($price_row_ttc, 2, '.', ' ') ?> €</td>
                    <td>
                        <input name="<?= $id ?>" type="number"
                               value="<?= $quantities[$id] ?>" min="0"/>
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
                <td>Total : <?= number_format($totalAndQuantities[0], 2, '.', ' ') ?> €/TTC</td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td><input type="submit" name="upload" value="Modifier le panier"/></td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td>
                    <button><a href="/?action=command">Valider le panier</a></button>
                </td>
            </tr>
        </table>
    </form>
<?php else: ?>
<p>Il n'y a rien dans le panier <br> Prière d'acheter</p>
<?php endif; ?>
    </section>
    </main>
    <?php require 'resources/views/layouts/footer.php' ?>