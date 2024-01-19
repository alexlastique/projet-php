<?php

$title = 'home';

ob_start();?>
<?php
echo "<h1>Mon Panier</h1>";
foreach ($_SESSION["panier"] as $nom){
    echo($nom.'<br>');
}
echo('<a href="/?p=commande"><button>commander</button></a><br>');
?>

<?php
$page_content = ob_get_clean();