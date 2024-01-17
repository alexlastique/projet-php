<?php

require_once __DIR__ . '/../../src/init.php';

if ('' == $_POST['email']) {
    $_SESSION['error_message'] = "Pas d'email";
    header('Location: /?p=register');
    die();
}

if ('' == $_POST['password']) {
    $_SESSION['error_message'] = "Pas de mot de passe";
    header('Location: /?p=register');
    die();
}

if (!isset($_POST['cpassword'])) {
    $_SESSION['error_message'] = "Pas de confirmation de mot de passe";
    header('Location: /?p=register');
    die();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error_message'] = "Email incorrect";
    header('Location: /?p=register');
    die();
}

if ($_POST['password'] !== $_POST['cpassword']) {
    $_SESSION['error_message'] = "Les mots de passe ne correspondent pas";
    header('Location: /?p=register');
    die();
}


$user = User::register($_POST['email'], $_POST['password']);
$user_id = $user->save();

// auto connect after register
$_SESSION['user_id'] = $user_id;

header('Location: /?p=home');
