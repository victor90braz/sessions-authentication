<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email) ) {
    $errors['email'] = "Please provide a valid email address.";
}

if (!Validator::string($password) ) {
    $errors['password'] = "Please provide a valid password.";
}

if (! empty($errors)) {
    return view('sessions/create.view.php', [
        'errors' => $errors
    ]);
}

// check if the credentials match
$user = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();


if (!$user) {
  return view('sessions/create.view.php', [
    'errors' => [
      'email' => 'No matching account found for that email address.'
    ]
  ]);
}

// log in the user with the credentials match

login([
  'email' => $email
]);