<?php

$title = 'home';

ob_start();?>
<?php
echo "<h1>Mon Panier</h1>";
$disponibility = true;
$panier = [
    'naruto' => 12,
    'One Piece Tome 106' => 5
          ];
function verifierDisponibilite($quantite,$valeur,$disponible) {
    if ($quantite < $valeur) {
        echo " - Indisponible</p>";
        $disponible = false;
    } else {
        echo " - Disponible</p>";
    } return $disponible;
}
foreach ($panier as $clef => $valeur){

    $dbsql = $db->prepare("SELECT * FROM product WHERE `name` LIKE :nom");
    $dbsql->execute([
        ':nom' => $clef
    ]);
    $produits =$dbsql->fetchAll();
    echo($clef);

    foreach ($produits as $row) {
        $quantite = $row['quantity'];
        $disponibility = verifierDisponibilite($quantite, $valeur,$disponibility);
    }
}
if (!$disponibility) {
    echo 'commande ne peut pas être passer !';
}
?>

<?php
$page_content = ob_get_clean();