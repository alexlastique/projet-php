<?php

require_once __DIR__ . '/../../init.php'; 

$title = 'product';
$_SESSION['currentProduct'] = $_GET['slug'];
$affiche = false;

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
            <?=($produit["price"]);?> € <br>
            <?php endforeach;?>
            <form action="/actions/product.php" method="post">
                <input type="number" name="number">
                <button type="submit">ajouter au panier</button>
            </form>

<?php
if (isset($_SESSION['command'])){
    foreach ($_SESSION['command'] as $produit) {
        if ($produit["container"] == $_GET['slug'] AND $affiche!=true){
            echo ('<form action="/actions/product.php" method="POST">
            <label for="comment">Commentaire:</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <button type="submit">envoyer Commentaire</button>
        </form>');
        $affiche = true;
        }
    }
}

?>
</div>
<?php
$page_content = ob_get_clean();
