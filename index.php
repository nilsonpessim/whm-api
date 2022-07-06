<?php

require "vendor/autoload.php";
use Source\App\WHM;

$client = (new WHM())->client(
    CONF_WHM_USER, CONF_WHM_TOKEN, CONF_WHM_URL, CONF_WHM_PORT
);

$account = (new WHM())->account($client);

var_dump(
    $account->getUsers()
);