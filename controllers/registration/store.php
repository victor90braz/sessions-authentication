<?php

use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

// validate the form inputs
$errors = [];
if (!Validator::email($email) ) {
    $errors[] = "Please provide a valid email address";
}

if (!Validator::string($password,7,15) ) {
    $errors[] = "Please provide a valid password";
}

// check if the account already exists
    // if yes, redirect to a login page
    // if not, save one to the database, and then log the user in, and redirect