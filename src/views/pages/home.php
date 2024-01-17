<?php

$title = 'home';

ob_start();?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../src/css/normalize.css">
        <link rel="stylesheet" href="../src/css/carrousel.css">
        <link rel="stylesheet" href="../src/css/header.css">
        <link rel="stylesheet" href="../src/css/footer.css">
        <link rel="stylesheet" href="../src/css/style.css">
        
        

        <title>Nihon Sphere</title>
    </head>
    <body id="acceuil">
        <div id="grandeImage" class="wrapper">

    <main>
        <section id="intro">
            <article>
            <div class="container">
  <div class="carousel">
    <div class="a">
      <div class="item">A</div>
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

    <div>
        LES ARTICLE
    </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../src/js/script.js"></script>
</html>
<?php
$page_content = ob_get_clean();


