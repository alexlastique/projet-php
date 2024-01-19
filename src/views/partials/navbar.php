<?php

ob_start();
if (isset($_SESSION['user_id'])){

}
?>
<ul>
    <li><a href="/?p=register">Register</a></li>
    <li><a href="/?p=productForm">productForm</a></li>
    <li><a href="/?p=home">Home</a></li>
    <li><a href="/?p=login">Login</a></li>
    <li><a href="/?p=command">Command</a></li>
</ul>
<?php
$navbar = ob_get_clean();