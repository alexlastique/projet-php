<?php

$title = 'register';

ob_start();?>
<div>
    <h1>PAGE REGISTER</h1>
    
    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>
    
    <form action="/actions/register.php" method="POST">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="mot de passe">
        <input type="password" name="cpassword" placeholder="confirmation mot de passe">
        <button type="submit">Inscription</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();
