<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$notes = $db->query('select * from notes where user_id = 3')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);