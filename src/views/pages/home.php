<?php

$title = 'home';

ob_start();?>
<div>
    PAGE HOME
    <form action="/actions/home.php" method="post">
        <input type="text" placeholder="search" name="search">
        <button type="submit">search</button>
    </form>
    <?php foreach($_SESSION["produit"] as $produit):?>
            <a href="/?p=product&slug=<?=$produit["nom"]?>">
            <?=$produit["nom"]?> <br>
            <?=($produit["categorie"]);?> <br>
            <img src="<?=($produit["image"]);?>"> <br>
            <?=($produit["quantite"]);?></a> <br>
            <?php endforeach;
            unset($_SESSION["produit"]);?>
</div>
<?php
$page_content = ob_get_clean();
