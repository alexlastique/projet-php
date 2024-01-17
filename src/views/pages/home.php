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
        

        <title>Manga Hub</title>
    </head>
    <body id="acceuil">
        <div id="grandeImage">

    <main>
        <section id="intro">
            <article>
                <div id="carrousel">
    <div class="container">
        <div class="title col-md-12 text-center"> En tête d'affiche !</div>
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <img src="https://picsum.photos/300/300/?random&1">
              <img src="https://picsum.photos/300/300/?random&2">
              <img src="https://picsum.photos/300/300/?random&3">
              <img src="https://picsum.photos/300/300/?random&4">
              <img src="https://picsum.photos/300/300/?random&5">
              <img src="https://picsum.photos/300/300/?random&6">
              <img src="https://picsum.photos/300/300/?rando&7">
              <img src="https://picsum.photos/300/300/?random&8">
            </div>
        </div>
      <div class="text-center">
        <button id="play-carousel" type="button" class="btn btn-dark">Play</button>
        <div class="status"></div>
      </div>
    </div>
</div>
            </article>
        </section>
    </div>
        <div id="container">
        <section id="contenu">
            <div id="galerie">
                <img src="assets/images/gengar.jpeg" alt="">
                <img src="assets/images/gravityFalls.jpeg" alt="">
                <img src="assets/images/wormHole.jpeg" alt="">
            </div>
            <div id="lorem">
            <article>
                <span>01</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
            </article>

            <article>
                <span>02</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
                </article>

            <article>
                <span>03</span>
                <div>
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ullam asperiores culpa eligendi perspiciatis assumenda quos distinctio delectus necessitatibus. Molestias sequi illo deserunt? Tempora, doloribus? Eius perferendis ab molestias doloribus?</p>
                </div>
            </article>
        </div>

            <div id="containerChiffre">
                <div id="imgChiffre">
                    <img src="assets/images/purple.jpeg" alt="">
                </div>
                <div id="chiffreCle">
                    <div id="parties"><span>310</span><p>Parties Jouées</p></div>
                    <div id="connecter"><span>1020</span><p>Joueurs Connectés</p></div>
                    <div id="record"><span>10 sec</span><p>Temps Record</p></div>
                    <div id="inscrits"><span>21 300</span><p>Joueurs Inscrits</p></div>
                </div>
            </div>

        </section>

        <section id="equipe">
            <h4>Notre Équipe</h4>
            <span>Quisque commodo facilisis purus. interdum volutoat arcu viverra seg</span>
            <hr class="accessory"/>
            <div id="equipes">
        <div class="equipe">
            <img src="assets/images/saturn.jpeg" alt="">
            <span>hamilton</span>
            <p>Games developer</p>
            <div class="reseaux">
                <ul>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-pinterest"></i></li>
                </ul>
            </div>
        </div>
    
        <div class="equipe">
            <img src="assets/images/neptune.jpeg" alt="">
            <span>mickhel</span>
            <p>Games developer</p>
            <div class="reseaux">
                <ul>
                    <li><i class="fa-brands fa-facebook"></i></li>
                    <li><i class="fa-brands fa-twitter"></i></li>
                    <li><i class="fa-brands fa-pinterest"></i></li>
                </ul>
            </div>
            </div>

            <div class="equipe">
                <img src="assets/images/jupiter.jpeg" alt="">
                <span>arnold</span>
                <p>Games developer</p>
                <div class="reseaux">
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-pinterest"></i></li>
                    </ul>
                </div>
            </div>
        
        </section>
    </div>
    </main>
<?php
$page_content = ob_get_clean();


