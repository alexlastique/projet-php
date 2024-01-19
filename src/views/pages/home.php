<?php
$title = 'home';

ob_start();?>
<div>
    
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
        <?php
        if (isset($_SESSION["produit"]) && count($_SESSION["produit"]) > 0) {
            $index = 0;
            foreach ($_SESSION["produit"] as $produit):
                ?>
                <div class="<?= chr(97 + $index); ?>">
                    <div class="item">
                        <a href="/?p=product&slug=<?= $produit["name"] ?>">
                            <img src="<?= $produit["image"]; ?>" class="carousel-image"> <br>
                        </a>
                    </div>
                </div>
                <?php
                $index++;
            endforeach;
        } else {
            ?>
            <div class="a"> <!-- Exemple avec la div "a" si aucun produit -->
                <div class="item">
                    <img src="path_to_default_image.jpg"> <br>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="next">></div>
<div class="prev"><</div>

</div>

    
    </main>
    
</body>
<p class="article">LES ARTICLE</p>
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
    <div class='containerImg'>
    <?php 
    if (isset($_SESSION["produit"])){
        foreach($_SESSION["produit"] as $produit):?>
        <div class="containerProduit">
                <p><?=$produit["name"]?> </p> <br>
                <p><?=($produit["category"]);?></p> <br>
                <a href="/?p=product&slug=<?=$produit["name"]?>">
                <img class="PicProduit" src="<?=($produit["image"]);?>"></a> <br>
                <p><?=($produit["quantity"]);?></p> <br>
                <?=($produit["price"]);?> €</a> <br>
                </div>
                <?php endforeach;
                unset($_SESSION["produit"]);}?>
</div>
</div>
<?php
$page_content = ob_get_clean();