<?php

ob_start();?>

<footer>
        <div class="ap5">
            <div class="ap1">
                <div class="ap3">
                    <p class="title-foot">Infomation</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p><span>Tél :</span> 06 05 04 03 02</p>
                    <p><span>Email :</span> support@powerofmemory.com</p>
                    <p><span>Location :</span> Paris</a></p>
                </div>
                <div class="logo-sm">
                    <script src="https://kit.fontawesome.com/f09ae54942.js" crossorigin="anonymous"></script>

                    <a href="facebook.com"><div class="logo"><i class="fa-brands fa-facebook" style="color: #fafcff;"></i></div></a>
                    <a href="twitter.com"><div class="logo"><i class="fa-brands fa-x-twitter" style="color: #fafcff;"></i></div></a>
                    <a href="google.com"><div class="logo"><i class="fa-brands fa-google-plus" style="color: #fafcff;"></i></div></a>
                    <a href="pinterest.com"><div class="logo"><i class="fa-brands fa-pinterest" style="color: #fafcff;"></i></div></a>
                    <a href="instagram.com"><div class="logo"><i class="fa-brands fa-instagram" style="color: #fafcff;"></i></div></a>
                </div>
            </div>


            <div class="ap2">
                <div class="ap4">
                    <p class="title-foot">Power Of Memory</p>
                    <ul class="list-ap">
                        <li><a class="underline" href="../Memories/views/Jeu.html">Jouer !</a></li>
                        <li><a class="underline" href="../Memories/views/score.html">Les scores</a></li>
                        <li><a class="underline" href="../Memories/views/contact.html">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="contentDeepFooter">
            <p>Copyright &copy 2022 Tous droits réservés</p>
            <a href="#top"><div id="onTop"><i class="fa-solid fa-chevron-up"></i></div></a>
        </div>
    </footer>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../src/js/script.js"></script>
</html>
<?php
$footer = ob_get_clean();
