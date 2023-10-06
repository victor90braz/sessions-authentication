<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];

if (!Validator::email($email) ) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password,7,15) ) {
    $errors['password'] = "Please provide a password at least seven characters.";
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

// check if the account already exists
$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

// if yes, redirect to a login page
if ($user) {
    // then someone with that email already exists and has an account
    header('location: /');
} else {
    // if not, save one to the database, and then log the user in
    $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
        'email' => $email,
        'password' => $password
    ]);

    // and redirect
    header('location: /');
}

