<?php 
require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['nomA']) {
    $_SESSION['error_message'] = "Pas de nom";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['categorieA']) {
    $_SESSION['error_message'] = "Pas de categorie";
    header('Location: /?p=productForm');
    die();
}

if ('' == $_POST['nomN']) {
    $_SESSION['error_message'] = "Pas de nom";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['categorieN']) {
    $_SESSION['error_message'] = "Pas de categorie";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['quantiteN']) {
    $_SESSION['error_message'] = "Pas de quantite";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['imageN']) {
    $_SESSION['error_message'] = "Pas d'image";
    header('Location: /?p=productForm');
    die();
}

$extensionsValides = array('png', 'jpg', 'jpeg');
$extensionsUpload = strtolower(substr(strrchr($_POST['imageN'],"."),1));
if (!(in_array($extensionsUpload, $extensionsValides))) {
    $_SESSION['error_message'] = "Mauvaise extension";
    header('Location: /?p=productForm');
    die();
}


global $db;

$query = $db->prepare('UPDATE produit 
SET nom = :nomN, categorie = :categorieN, image = :imageN, quantite = :quantiteN
WHERE nom = :nomA AND categorie = :categorieA');

$query->execute([
    ':nomN' => $_POST['nomN'],
    ':categorieN' => $_POST['categorieN'],
    ':imageN' => $_POST['imageN'],
    ':quantiteN' => $_POST['quantiteN'],
    ':nomA' => $_POST['nomA'],
    ':categorieA' => $_POST['categorieA']
]);

$_SESSION['error_message'] = "Produit modifié";
header('Location: /?p=productForm');
?>