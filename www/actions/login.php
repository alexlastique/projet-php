<?php

require_once __DIR__ . '/../../src/init.php';

if (!isset($_POST['emailL'])) {
    $_SESSION['error_message'] = "Pas d'email";
    header('Location: /?p=login');
    die();
}

if (!isset($_POST['passwordL'])) {
    $_SESSION['error_message'] = "Pas de password";
    header('Location: /?p=login');
    die();
}

if (!filter_var($_POST['emailL'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = "Email incorrect";
    header('Location: /?p=login');
    die();
}

$user = User::getByEmail($_POST['emailL']);
if ($user != false) {
    $validPassword = $user->verifyPassword($_POST['passwordL']);
    if ($validPassword) {
        // all good
        $_SESSION['user_id'] = $user->id;
        header('Location: /?p=home');
        die();
    }
}
else{
    $_SESSION['error_message'] = "probleme";
    header('Location: /?p=login');
    die();
}
