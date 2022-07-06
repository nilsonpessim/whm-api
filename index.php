<?php

require "vendor/autoload.php";
use Source\App\WHM;

$newClient = (new WHM())->client();
$account = (new WHM())->account($newClient);

var_dump(
    $account->getUsers()
);