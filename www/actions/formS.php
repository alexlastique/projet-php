<?php 
require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['nomS']) {
    $_SESSION['error_message'] = "Pas de nom";
    header('Location: /?p=productForm');
    die();
}
if ('' == $_POST['categorieS']) {
    $_SESSION['error_message'] = "Pas de categorie";
    header('Location: /?p=productForm');
    die();
}


global $db;

$query = $db->prepare('DELETE FROM product
WHERE name = :nom AND category = :categorie');

$query->execute([
    ':nom' => $_POST['nomS'],
    ':categorie' => $_POST['categorieS'],
]);

$_SESSION['error_message'] = "Produit suprimé";
header('Location: /?p=productForm');
?>