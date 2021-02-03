<?php
?>

    <main>
    <header>
            <h1><?=$product['title']?></h1>
    </header>

    <article>
        <p><?=$product['description']?></p> <br> <p>Prix = <?=$finalPrice?>€</p>
    </article>
</main>

<form action="/index.php?action=cart" method="POST">
    <div>
        <label for="quantity">Quantité :</label>
        <input name="quantity" type="number" min="0">
    </div>
    <div>
        <button type="submit" name="submit">Ajouter au panier</button>
    </div>
</form>