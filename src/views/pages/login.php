<?php

$title = 'login';

ob_start();?>
<div>
    <h1>PAGE LOGIN</h1>

    <?php require_once __DIR__ . '/../partials/show_error.php'; ?>

    <form action="/actions/login.php" method="POST">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="mot de passe">
        <button type="submit">Connexion</button>
    </form>
</div>
<?php
$page_content = ob_get_clean();