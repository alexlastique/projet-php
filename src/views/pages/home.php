<?php

$title = 'home';

ob_start();?>
<div>
    PAGE HOME
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        
        

        <title>Nihon Sphere</title>
    </head>
    <body id="acceuil">
        <div id="grandeImage">

    <main>
        <section id="intro">
            <article>
            <div class="container">
  <div class="carousel">
    <div class="a">
      <div class="item"><?php
if (isset($_SESSION["produit"]) && count($_SESSION["produit"]) > 0) {
    foreach($_SESSION["produit"] as $produit):
        ?>
        <a href="/?p=product&slug=<?= $produit["name"] ?>">
            <img src="<?= $produit["image"]; ?>"> <br>
        </a>
        <?php
    endforeach;
} else {
    ?>
    <img src="path_to_default_image.jpg"> <br>
    <?php
}
?></div>
    </div>
    <div class="b">
      <div class="item">B</div>
    </div>
    <div class="c">
      <div class="item">C</div>
    </div>
    <div class="d">
      <div class="item">D</div>
    </div>
    <div class="e">
      <div class="item">E</div>
    </div>
    <div class="f">
      <div class="item">F</div>
    </div>

  </div>
</div>
<div class="next">Next</div>
<div class="prev">Prev</div>

    
    </main>
    
</body>
<div>
        LES ARTICLE

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/script.js"></script>
</html>
    <form action="/actions/home.php" method="post">
        <input type="text" placeholder="search" name="search">
        <p>
    <label for="categorie">Sélectionner une catégorie : </label>
    <select name="categorie" id="categorie">
        <option name="filtre" value="tout">tout</option>
        <option name="filtre" value="manga">manga</option>
        <option name="filtre" value="poster">poster</option>
        <option name="filtre" value="figurine">figurine</option>
        <option name="filtre" value="accesoire">accessoire</option>
    </select>
</p>
        <button type="submit">search</button>
    </form>
    <?php 
    if (isset($_SESSION["produit"])){
        foreach($_SESSION["produit"] as $produit):?>
                <a href="/?p=product&slug=<?=$produit["name"]?>">
                <?=$produit["name"]?> <br>
                <?=($produit["category"]);?> <br>
                <img src="<?=($produit["image"]);?>"> <br>
                <?=($produit["quantity"]);?></a> <br>
                <?=($produit["price"]);?> €</a> <br>
                <?php endforeach;
                unset($_SESSION["produit"]);}?>
</div>
<?php
$page_content = ob_get_clean();