<?php

$title = 'home';

ob_start();?>
<div>
    PAGE HOME
    <form action="/actions/home.php" method="post">
        <input type="text" placeholder="search" name="search">
        <p>
    <label for="categorie">Sélectionner une catégorie : </label>
    <select name="categorie" id="categorie">
        <option name="filtre" value="tout">tout</option>
        <option name="filtre" value="manga">manga</option>
        <option name="filtre" value="poster">poster</option>
        <option name="filtre" value="figurine">figurine</option>
        <option name="filtre" value="accesoire">accessoire</option>
    </select>
</p>
        <button type="submit">search</button>
    </form>
    <?php 
    if (isset($_SESSION["produit"])){
        foreach($_SESSION["produit"] as $produit):?>
                <a href="/?p=product&slug=<?=$produit["name"]?>">
                <?=$produit["name"]?> <br>
                <?=($produit["category"]);?> <br>
                <img src="<?=($produit["image"]);?>"> <br>
                <?=($produit["quantity"]);?> <br>
                <?=($produit["price"]);?> €</a> <br>
                <?php endforeach;
                unset($_SESSION["produit"]);}?>
</div>
<?php
$page_content = ob_get_clean();