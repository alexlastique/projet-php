<?php

$title = 'commande';
$_SESSION['panier']=["One Piece Tome 106","Spy x family Tome 1"];

ob_start();?>
<div>
    PAGE commande <?= var_dump($_SESSION["panier"])?>
    <form action="/actions/commande.php" method="post">
        <input type="text" placeholder="nom" name="nom">
        <input type="text" placeholder="prenom" name="prenom">
        <input type="text" placeholder="adresse de livraison" name="adresse">
        <button type="submit">payer commande</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
