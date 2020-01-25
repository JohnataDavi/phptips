<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(7);

if ($user) {
    $user->destroy();
    echo "User deletado com sucesso!";
} else {
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
}

