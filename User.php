<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/App/User.php';


$User = new User("Maks",18,"email");
$User->getAll("Maks",18,"email");
d($User);