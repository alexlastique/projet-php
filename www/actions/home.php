<?php

require_once __DIR__ . '/../../src/init.php';

if ($_POST['search']=="") {
    $_SESSION['error_message'] = "Pas de recherhce";
    header('Location: /?p=home');
    die();
}
$dbsql=$db->prepare("SELECT * FROM produit WHERE nom LIKE :nom");
$dbsql-> execute([
    ':nom' => '%'.$_POST['search'].'%'
]);
$produits =$dbsql->fetchAll();
if ($_POST['categorie']=="tout"){
    $dbsql=$db->prepare("SELECT * FROM produit WHERE nom LIKE :nom");
    $dbsql-> execute([
        ':nom' => '%'.$_POST['search'].'%'
    ]);
    $produits =$dbsql->fetchAll();
    }
    else {
        $dbsql=$db->prepare("SELECT * FROM produit WHERE nom LIKE :nom AND categorie LIKE :categorie");
    $dbsql-> execute([
        ':nom' => '%'.$_POST['search'].'%',
        ':categorie' => '%'.$_POST['categorie'].'%'
    
    ]);
    $produits =$dbsql->fetchAll();
    }
$_SESSION["produit"]=$produits;
header('Location: /?p=home');
