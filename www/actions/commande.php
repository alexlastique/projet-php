<?php 
require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['nom']) {
    $_SESSION['error_message'] = "Pas de nom";
    header('Location: /?p=commande');
    die();
}
if ('' == $_POST['prenom']) {
    $_SESSION['error_message'] = "Pas de prenom";
    header('Location: /?p=commande');
    die();
}
if ('' == $_POST['adresse']) {
    $_SESSION['error_message'] = "Pas d'adresse";
    header('Location: /?p=commande');
    die();
}
$query = $db->prepare("SELECT * FROM `utilisateur` WHERE id LIKE :id");

$query->execute([
    ':id' => $_SESSION['user_id'],
]);
$produits =$query->fetchAll();

$query2 = $db->prepare("INSERT INTO `commande`(`statut`, `containeur`, `adresse`, `id_u`) VALUES ('SEND', :containeur, :adresse, :id)");

$query2->execute([
    ':containeur' => $_SESSION['panier'],
    ':adresse' => $_POST['adresse'],
    ':id' => $_SESSION['user_id']
]);

$to = $produits[0]["email"];
$subject = "Commande Nihon Sphere";
$message = "Votre commande a bien été pris en compte.";

$headers = "From: NoReaplyPlease@gmail.com\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, $headers);

header('Location: /?p=commande');
?>