<?php

require_once __DIR__ . '/../../src/init.php';

if (!isset($_POST['email'])) {
    $_SESSION['error_message'] = "Pas d'email";
    header('Location: /?p=login');
    die();
}

if (!isset($_POST['password'])) {
    $_SESSION['error_message'] = "Pas de password";
    header('Location: /?p=login');
    die();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = "Email incorrect";
    header('Location: /?p=login');
    die();
}

$user = User::getByEmail($_POST['email']);
if ($user != false) {
    $validPassword = $user->verifyPassword($_POST['password']);
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
