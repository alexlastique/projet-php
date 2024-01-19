<?php

require_once __DIR__ . '/../../src/init.php';

if (""!=$_POST['number']){
    for ($i = 0; $i < intval($_POST['number']); $i++) {
        array_push($_SESSION['panier'], $_SESSION['currentProduct']);
    }
}
if (!isset($_POST['comment'])) {
    $_SESSION['error_message'] = "Pas de commentaire";
    header('Location: /?p=product&slug='. $_SESSION['currentProduct']);
    die();
}
$dbsql=$db->prepare("SELECT * FROM command WHERE idUser LIKE :idUser");
$dbsql-> execute([
    ':idUser' => $_SESSION['user_id']
]);
$produits =$dbsql->fetchAll();
$_SESSION['command'] = $produits;
foreach ($produits as $produit) {
    if ($produit["container"] ==  $_SESSION['currentProduct']){
        $query = $db->prepare('INSERT INTO `comment`(`container`,`product`, `idUser`) VALUES (:container,:product, :idUser)');
        $query->execute([
            ':container' => $_POST['comment'],
            ':product' => $_SESSION['currentProduct'],
            ':idUser' => $_SESSION['user_id']
        ]);
    }
}
header('Location: /?p=product&slug='. $_SESSION['currentProduct']);