<?php
// actions/command.php
$sortStatut = isset($_GET['sort_statut']) ? urlencode($_GET['sort_statut']) : '';
$sortCriteria = isset($_GET['sort_criteria']) ? urlencode($_GET['sort_criteria']) : '';
header("Location: /?p=command&sort_statut=$sortStatut&sort_criteria=$sortCriteria");
exit();
?>
