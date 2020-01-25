<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Pedro";
$user->last_name = "Souza";
$user->genre = "M";
$user->save();

//$addr = new Address();
//$addr->add($user, "Nome da rua", "22Corno");
//$addr->save();


echo "<pre>";
var_dump($user);
echo "</pre>";