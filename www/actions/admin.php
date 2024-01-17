<?php 
require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['emailA']) {
    $_SESSION['error_message'] = "Pas d'email";
    header('Location: /?p=productForm');
    die();
}
if (!filter_var($_POST['emailA'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = "Email incorrect";
    header('Location: /?p=productForm');
    die();
}

$query = $db->prepare('UPDATE utilisateur 
SET role = 1
WHERE email = :email');

$query->execute([
    ':email' => $_POST['emailA']
]);

$_SESSION['error_message'] = "admin ajouté";
header('Location: /?p=productForm');
?>