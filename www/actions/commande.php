<?php 
require_once __DIR__ . '/../../src/init.php';
$i = 0;

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
$query = $db->prepare("SELECT * FROM `user` WHERE id LIKE :id");

$query->execute([
    ':id' => $_SESSION['user_id'],
]);
$produits =$query->fetchAll();

foreach($_SESSION['panier'] as $panier){
    $query = $db->prepare("SELECT * FROM `product` WHERE `name`=:nom");

    $query->execute([
        ':nom' => $panier
    ]);
    $quantity = $query->fetchAll();

    if(intval($quantity[0]['quantity']>0)){
        $query = $db->prepare("UPDATE `product` SET `quantity`=:quantity WHERE `name`=:nom");

        $query->execute([
            ':quantity' => intval($quantity[0]['quantity'])-1,
            ':nom' => $panier
        ]);

        $query2 = $db->prepare("INSERT INTO `command`(`status`, `container`, `address`, `idUser`) VALUES (:statut, :containeur, :adresse, :id)");

        $query2->execute([
            ':statut' => "NEW",
            ':containeur' => $panier,
            ':adresse' => $_POST['adresse'],
            ':id' => intval($_SESSION['user_id'])
        ]);
        unset($_SESSION['panier'][$i]);
    }else{
        $_SESSION['error_message'] = "Pas asser de produit";
    }
    $i+=1;

}
$to = $produits[0]["email"];
$subject = "Commande Nihon Sphere";
$message = "Votre commande a bien été pris en compte.";

$headers = "From: NoReaplyPlease@gmail.com\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $message, $headers);

header('Location: /?p=commande');
?>