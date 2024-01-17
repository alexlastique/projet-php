<?php
if (isset($_SESSION['user_id'])){
    $user = User::getById($_SESSION['user_id']);
}else{$user = '';}

if ($user != '' AND $user->role == 1) {

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
            <input type="text" name="prix" placeholder="prix">
            <button type="submit">Ajouter un produit</button>
        </form>
        <br>
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
            <input type="text" name="prixN" placeholder="prix">
            <br>
            <br>
            <button type="submit">Modifier produit</button>
        </form>
        <br>
        <br>

        <p>Suprimer un produit :</p>
        <form action="/actions/formS.php" method="POST">
            <input type="text" name="nomS" placeholder="nom">
            <input type="text" name="categorieS" placeholder="categorie">
            <button type="submit">Suprimer</button>
        </form>
        <br>
        <br>

        <p>Ajouter un admin :</p>
        <form action="/actions/admin.php" method="POST">
            <input type="email" name="emailA" placeholder="email">
            <button type="submit">Ajouter</button>
        </form>
    </div>
    <?php
    $page_content = ob_get_clean();
} else {
    header('Location: /?p=home');
}