<?php

ob_start();
if (isset($_SESSION['user_id'])){
    echo $_SESSION['user_id'];
}
?>
<ul>
    <li><a href="/?p=register">Go to Register</a></li>
    <li><a href="/?p=productForm">Go to productForm</a></li>
    <li><a href="/?p=home">Go to Home</a></li>
    <li><a href="/?p=login">Go to Login</a></li>
    <li><a href="/?p=command">Go to Command</a></li>
</ul>
<?php
$navbar = ob_get_clean();