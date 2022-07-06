<?php
/* getUsers (List of all users in server) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->getUsers();

echo json_encode($account);