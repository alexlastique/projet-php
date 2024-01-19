<?php

$title = 'commande';

ob_start();?>
<div>
    PAGE commande <?php foreach($_SESSION["panier"] as $panier){
        echo('<br>');
        echo($panier);
    }?>
    <form action="/actions/commande.php" method="post">
        <input type="text" placeholder="nom" name="nom">
        <input type="text" placeholder="prenom" name="prenom">
        <input type="text" placeholder="adresse de livraison" name="adresse">
        <button type="submit">payer commande</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
