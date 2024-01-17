<?php


$title = 'form';

ob_start();?>
<div>
    <h1>FORMULAIRE POUR METTRE UN PRODUIT</h1>

    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>

    <form action="/actions/form.php" method="POST">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="categorie" placeholder="categorie">
        <input type="file" name="image" placeholder="image">
        <input type="number" name="quantite" placeholder="quantite">
        <button type="submit">Ajouter un produit</button>
    </form>
    <form action="/actions/form.php" method="POST">
        <input type="text" name="nomM" placeholder="nom">
        <input type="text" name="categorieM" placeholder="categorie">
        <input type="file" name="imageM" placeholder="image">
        <input type="number" name="quantiteM" placeholder="quantite">
        <button type="submit">Ajouter un produit</button>
    </form>
    <form action="/actions/form.php" method="POST">
        <input type="text" name="nomS" placeholder="nom">
        <input type="text" name="categorieS" placeholder="categorie">
        <input type="file" name="imageS" placeholder="image">
        <input type="number" name="quantiteS" placeholder="quantite">
        <button type="submit">Ajouter un produit</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();