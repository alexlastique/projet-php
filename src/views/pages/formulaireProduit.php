<?php


$title = 'formulaire';

ob_start();?>
<div>
    <h1>FORMULAIRE POUR METTRE UN PRODUIT</h1>
    
    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>
    
    <form action="/actions/formulaire.php" method="POST">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="categorie" placeholder="categorie">
        <input type="file" name="image" placeholder="image">
        <input type="text" name="quantite" placeholder="quantite">
        <button type="submit">Ajouter un produit</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
