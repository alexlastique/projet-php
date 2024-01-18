<?php

require_once __DIR__ . '/../../src/init.php';

if ($_POST['search']=="") {
    $_SESSION['error_message'] = "Pas de recherhce";
    header('Location: /?p=home');
    die();
}
$dbsql=$db->prepare("SELECT * FROM product WHERE name LIKE :nom");
$dbsql-> execute([
    ':nom' => '%'.$_POST['search'].'%'
]);
$produits =$dbsql->fetchAll();

$_SESSION["produit"]=$produits;
header('Location: /?p=home');
