<?php require 'resources/views/layouts/header.php' ?>
    <main>
        <article>
            <header>
                <h3><?= $product['title'] ?></h3>
            </header>
            <img src="resources/img/<?= $id ?>.jpg" alt="<?= $product['title'] ?>" height="150"/>
            <p><?= $product['description'] ?></p>
            <footer>
                <em>Prix : <?= number_format($finalPrice,2,'.', ' ') ?> €/TTC</em>
            </footer>
        </article>

        <form action="/index.php?action=cart" method="POST">
            <div>
                <input type="hidden" name="id" value="<?= $product['id']?>">
            </div>
            <div>
                <label for="quantity">Quantité :</label>
                <input id="quantity" name="quantity" type="number" min="1" value="1">
            </div>
            
            <div>
                <button type="submit" name="submit">Ajouter au panier</button>
            </div>
        </form>
    </main>
<?php require 'resources/views/layouts/footer.php' ?>