<?php

require_once __DIR__ . '/../../init.php'; 

$title = 'product';

ob_start();?>
<div>
    PAGE PRODUCT <br>
    <?php $dbsql=$db->prepare("SELECT * FROM produit WHERE nom LIKE :nom");
    $dbsql-> execute([
        ':nom' => $_GET['slug']
    ]);
    $produits =$dbsql->fetchAll();

    foreach($produits as $produit):
            echo($produit["nom"]);?> <br>
            <?=($produit["categorie"]);?> <br>
            <img src="<?=($produit["image"]);?>"> <br>
            <?=($produit["quantite"]);?> <br>
            <?php endforeach;?>
</div>
<?php
$page_content = ob_get_clean();
