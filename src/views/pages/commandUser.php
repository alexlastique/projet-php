<?php
require_once __DIR__ . '/../../init.php'; 
$title = 'command';
ob_start();

if (isset($_SESSION['user_id'])){
    $user = User::getById($_SESSION['user_id']);
}else{$user = '';}

if ($user != '') {
?>

    <form action="/actions/commandUser.php" method="get">
        <label for="sort_statut">Trier par statut :</label>
        <select name="sort_statut" id="sort_statut">
            <option value="">Toutes les commandes</option>
            <option value="NEW">NEW</option>
            <option value="SENT">SENT</option>
            <option value="FINISHED">FINISHED</option>
            <option value="CANCELED">CANCELED</option>
        </select>

        <label for="sort_criteria">Trier par :</label>
        <select name="sort_criteria" id="sort_criteria">
            <option value="creationDate">Date de création</option>
            <option value="updateDate">Date de mise à jour</option>
        </select>

        <input type="submit" value="Trier">
    </form>

    <?php

    // Déterminer le statut de tri (NEW, SENT, FINISHED, CANCELED)
    $sortStatut = isset($_GET['sort_statut']) ? $_GET['sort_statut'] : '';

    // Déterminer le critère de tri (dateCreation, dateMAJ)
    $sortCriteria = $_GET['sort_criteria'];

    // Condition to handle the case when 'Toutes les commandes' is selected
    if ($sortStatut === '') {
        // Utilisez une condition pour déterminer la colonne à utiliser dans ORDER BY
        $orderBy = ($sortCriteria === 'creationDate' || $sortCriteria === 'updateDate') ? $sortCriteria : 'id';

        $query = $db->prepare("SELECT * FROM command WHERE idUser = :idU ORDER BY $orderBy DESC");
        $query->execute([':idU' => $_SESSION["user_id"]]);
    } else {
        // Requête SQL pour récupérer toutes les commandes avec tri par statut
        // Utilisez une condition pour déterminer la colonne à utiliser dans ORDER BY
        $orderBy = ($sortCriteria === 'creationDate' || $sortCriteria === 'updateDate') ? $sortCriteria : 'id';

        $query = $db->prepare("SELECT * FROM command WHERE status = :statut AND idUser = :idU ORDER BY $orderBy DESC");
        $query->execute([':statut' => $sortStatut,
    ':idU' => $_SESSION["user_id"]]);
    }

    $result = $query->fetchAll();

    for ($i = 0; $i < count($result); $i++) {
        ?>
        
        <?php
        echo 'statut : ' . $result[$i]['status']. '<br>';
        echo 'date création : ' . $result[$i]['creationDate'].'<br>';
        echo 'date MAJ : ' . $result[$i]['updateDate'] .'<br>';
        echo 'containeur : ' . $result[$i]['container'].'<br>';
        echo 'adresse : ' . $result[$i]['address'].'<br>';
        echo '<br> <br>';
    }

    $page_content = ob_get_clean();
} else {
    // header('Location: /?p=home');
}
?>