<?php require 'resources/views/layouts/header.php'?>
<main>
    <section>
    <?php foreach ($products as $product):?>
    <article>
        <h3> <?= $product['title']?> </h3>
        <p> Description du produit  <?= $product['description']?></p>
        <p> Prix HT<?= $product['price_ht']?></p>
        <p> Poids du produit<?= $product['weight']?></p>
        <p> Quantité en stock <?= $product['stock']?></p>


    </article>
    <?php endforeach;?>
    </section>
</main>
<?php require 'resources/views/layouts/footer.php'?>