<?php 
require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['nom']) {
    $_SESSION['error_message'] = "Pas de nom";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['categorie']) {
    $_SESSION['error_message'] = "Pas de categorie";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['quantite']) {
    $_SESSION['error_message'] = "Pas de quantite";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['image']) {
    $_SESSION['error_message'] = "Pas d'image";
    header('Location: /?p=productForm');
    die();
}

$extensionsValides = array('png', 'jpg', 'jpeg');
$extensionsUpload = strtolower(substr(strrchr($_POST['image'],"."),1));
if (!(in_array($extensionsUpload, $extensionsValides))) {
    $_SESSION['error_message'] = "Mauvaise extension";
    header('Location: /?p=productForm');
    die();
}


global $db;

$query = $db->prepare('INSERT INTO produit (nom, categorie, image, quantite) VALUES(:nom, :categorie, :image, :quantite)');

$query->execute([
    ':nom' => $_POST['nom'],
    ':categorie' => $_POST['categorie'],
    ':image' => $_POST['image'],
    ':quantite' => $_POST['quantite'],
]);
header('Location: /?p=productForm');
