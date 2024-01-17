<?php
require_once __DIR__ . '/../../src/init.php';
var_dump($_POST['command_id']);
var_dump($_POST['new_status']);

$query = $db->prepare('UPDATE commande SET statut = :new_status, dateMAJ = NOW() WHERE id = :command_id');
$query->execute([
    ':new_status' => $_POST['new_status'],
    ':command_id' => $_POST['command_id'],
]);

header('Location: /?p=command');
exit();
?>
