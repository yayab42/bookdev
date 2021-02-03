<?php
?>

    <main>
<?php
    foreach ($product as $row):?>
    <header>
            <h1><?=$row['title']?></h1>
    </header>

    <article>
        <p><?=$row['descritpion']?></p> <br> <?=$finalPrice?>
    </article>
     <?php endforeach;?>
</main>
