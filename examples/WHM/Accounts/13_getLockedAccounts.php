<?php
/* getLockedAccounts (List of all locked accounts) */
require __DIR__ . "/../../../vendor/autoload.php";

use Source\App\WHM;

$newClient = (new WHM())->client();
$account   = (new WHM())->account($newClient)->getLockedAccounts();

echo json_encode($account);