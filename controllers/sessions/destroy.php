<?php

// log out user out
$_SESSION = [];

logout();

header('location: /');
exit();