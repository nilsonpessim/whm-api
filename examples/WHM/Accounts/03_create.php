<?php
/* create (Create a new account) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->create("", "");

echo json_encode($account);