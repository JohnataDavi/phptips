<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(7);
$user->first_name = "Lucas";
$user->save();
echo "<pre>";
var_dump($user);
echo "</pre>";