<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Hello World!",
    "<h1>GG test email!</h1>É bom ter funcionado.",
    "Johnata Davi",
    "infojohnata@gmail.com"
)->attach(
    "files/01.png",
    "GGPHP"
)->attach(
    "files/02.png",
    "JPEG"
)->send();

if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}

/*echo "<pre>";
var_dump($email);
echo "</pre>";*/