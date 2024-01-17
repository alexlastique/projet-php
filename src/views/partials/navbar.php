<?php

ob_start();?>
<ul>
    <li><a href="/?p=register">Go to Register</a></li>
    <li><a href="/?p=formulaireProduit">Go to formulaireProduit</a></li>
    <li><a href="/?p=home">Go to Home</a></li>
</ul>
<?php
$navbar = ob_get_clean();
