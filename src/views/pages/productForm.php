<?php


$title = 'form';

ob_start();?>
<div>
    <h1>FORMULAIRE POUR METTRE UN PRODUIT</h1>

    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>

    <p>Ajouter un produit :</p>
    <form action="/actions/form.php" method="POST">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="categorie" placeholder="categorie">
        <input type="file" name="image" placeholder="image">
        <input type="number" name="quantite" placeholder="quantite">
        <button type="submit">Ajouter un produit</button>
    </form>
    <br>

    <p>Modifier un produit :</p>
    <form action="/actions/formM.php" method="POST">
        ancien produit
        <input type="text" name="nomA" placeholder="ancien nom">
        <input type="text" name="categorieA" placeholder="ancienne categorie">
        <br>
        <br>
        nouveau produit
        <input type="text" name="nomN" placeholder="nom">
        <input type="text" name="categorieN" placeholder="categorie">
        <input type="file" name="imageN" placeholder="image">
        <input type="number" name="quantiteN" placeholder="quantite">
        <br>
        <br>
        <button type="submit">Modifier produit</button>
    </form>
    <br>

    <p>Suprimer un produit :</p>
    <form action="/actions/formS.php" method="POST">
        <input type="text" name="nomS" placeholder="nom">
        <input type="text" name="categorieS" placeholder="categorie">
        <button type="submit">Suprimer</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();