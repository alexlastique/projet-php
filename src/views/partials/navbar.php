<?php

ob_start();?>
<header>

    <nav>
            <h2>Manga Hub</h2>
            <ul>
                <li><a href="/?p=index">ACCUEIL</a></li>
                <li><a href="/?p=mangas">MANGAS</a></li>
                <li><a href="/?p=posters">POSTERS</a></li>
                <li><a href="/?p=figurines">FIGURINES</a></li>
                <li><a href="/?p=accessoires">ACCESSOIRES</a></li>
            </ul>

</header>
<?php
$navbar = ob_get_clean();
