<?php

require_once __DIR__ . '/../../init.php'; 

$title = 'product';

ob_start();?>
<div>
    PAGE PRODUCT <br>
    <?php $dbsql=$db->prepare("SELECT * FROM product WHERE `name` LIKE :nom");
    $dbsql-> execute([
        ':nom' => $_GET['slug']
    ]);
    $produits =$dbsql->fetchAll();

    foreach($produits as $produit):
            echo($produit["name"]);?> <br>
            <?=($produit["category"]);?> <br>
            <img src="<?=($produit["image"]);?>"> <br>
            <?=($produit["quantity"]);?> <br>
            <?=($produit["price"]);?> <br>
            <?php endforeach;?>
</div>
<?php
$page_content = ob_get_clean();
