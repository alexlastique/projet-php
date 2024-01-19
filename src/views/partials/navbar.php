<?php

ob_start();
?>
<ul>
    <li><a href="/?p=register">Go to Register</a></li>
    <li><a href="/?p=productForm">Go to productForm</a></li>
    <li><a href="/?p=home">Go to Home</a></li>
    <li><a href="/?p=login">Go to Login</a></li>
    <li><a href="/?p=command&sort_criteria=creationDate">Go to Command</a></li>
    <li><a href="/?p=commandUser&sort_criteria=creationDate">Go to CommandUser</a></li>
    <li><a href="/?p=panier">Go to Panier</a></li>
</ul>
<?php
$navbar = ob_get_clean();